<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function add(Request $request) {
        $productId = $request->get('productId');//Lấy ra thông tin sản phẩm từ request.
        $productQuantity = $request->get('productQuantity');//Lấy ra số lượng sản phẩm cần thêm.
        $action = $request->get('cartAction');//Lấy ra số lượng sản phẩm cần thêm.
        //Kiểm tra sự tồn tại của sản phẩm trong database
        $product = Product::find($productId);
        if ($product == null) {
            //Trong trường hợp sản phẩm không còn tồn tại thì show trang 404.
            return view('404');
        }
        //Kiểm tra số lượng sản phẩm thêm vào đơn hàng, đảm bảo lớn hơn 0. $productQuantity
        //Kiểm tra số lượng hàng còn trong kho (tạm thời coi như luôn có)
        //Kiểm tra trong session có shopping cart chưa
        $shoppingCart = null;
        if (Session::has('shoppingCart')) {
            //Có rồi thì lấy thông tin cũ ra
            $shoppingCart = Session::get('shoppingCart');
        } else {
            //Chưa có thì tạo mới.
            $shoppingCart = [];
        }
        //Kiểm tra trong shoppingcart có sản phẩm này chưa.
        $cartItem = null;
        $message = 'Thêm sản phẩm vào giỏ hàng thành công!';
        if (!array_key_exists($productId, $shoppingCart)) {
            //Trường hợp chưa có sản phẩm, tạo ra cartItem mới, lấy thông tin từ chính sản phẩm đó.
            $cartItem = new \stdClass();
            $cartItem->id = $product->id;
            $cartItem->name = $product->name;
            $cartItem->thumbnail = $product->thumbnail;
            $cartItem->price = $product->price;
            $cartItem->quantity = intval($productQuantity);
        } else {
            //Trường hợp có sản phẩm rồi thì lấy ra và tăng số lượng.
            $cartItem = $shoppingCart[$productId];
            if ($action != null && $action == 'update') {
                $cartItem->quantity = $productQuantity;
                $message = 'Update sản phẩm thành công!';
            } else {
                $cartItem->quantity += $productQuantity;
                $message = 'Thêm mới sản phẩm vào giỏ hàng thành công!';
            }
        }
        //Sau đó cho lại vào shopping cart
        $shoppingCart[$productId] = $cartItem;
        //Lưu shoppingcart vào lại trong session
        Session::put('shoppingCart', $shoppingCart);
        Session::flash('success-msg', 'Thêm sản phẩm vào giỏ hàng thành công!');
        return redirect('/shopping/cart')->with('message', $message);
    }

    public function show() {
        $shoppingCart = Session::get('shoppingCart');
        return view('shoppingCard.cardProduct', [
            'shoppingCart'=>$shoppingCart
        ]);
    }

    public function remove(Request $request) {
        $productId = $request->get('productId');
        $shoppingCart = null;
        if (Session::has('shoppingCart')) {
            $shoppingCart = Session::get('shoppingCart');
            unset($shoppingCart[$productId]);
            Session::put('shoppingCart', $shoppingCart);
            return redirect('/shopping/cart')->with('remove', 'Xoá sản phẩm khỏi giỏ hàng thành công!');
        }
    }
    public function save(Request $request) {
        //shoppingCart(cartItem1, cartItem2)
        //kiểm tra thông tin giỏ hàng, nếu không có sản phẩm trả về trang products.
        if(!Session::has('shoppingCart') || count(Session::get('shoppingCart')) == 0) {
            Session::flash('error-msg','hiện  không có sản phẩm nào trong giỏ hàng');
            return redirect('/shopping/list');
        }
        // chuyển đổi từ shopping cart sang order, từng cartItem sẽ chuyển thành order detail
        $shoppingCart = Session::get('shoppingCart');
        $order = new Order();
        $order->totalPrice = 0;
        $order->customerId = 1;
        $order->shipName = $request->get('fullName');
        $order->shipPhone = $request->get('phone');
        $order->shipAddress = $request->get('address');
        $order->note = $request->get('note');
        $order->isCheckout = false;
        $order->created_at = Carbon::now();
        $order->updated_at = Carbon::now();
        $order->status = 0;
        $orderDetails = [];
        $messageError = '';
        foreach ($shoppingCart as $cartItem) {
            $product = Product::find($cartItem->id);
            if ($product == null) {
                $messageError = ' có lỗi xảy ra, sản phẩm với id'. $cartItem->id. 'không tồn tại hoặc đã bị xóa';
                break;
            }
            $orderDetail = new OrderDetail(); // hiên tại chưa thể order id vì chưa lưu
            $orderDetail->productId = $product->id;
            $orderDetail->unitPrice = $product->price;
            $orderDetail->quantity = $product->quantity * $orderDetail->unitPrice;
            array_push($orderDetails, $orderDetail);
        }
        if (count($orderDetails) == 0) {
            Session::flash('error-msg', $messageError);
            return redirect('/shopping/list');
        }
        try {
            DB::beginTransaction();
            $order->save();
            $orderDetailsArray = [];
            foreach ($orderDetails as $orderDetail) {
                $orderDetail->orderId = $order->id;
                array_push($orderDetail, $orderDetail->toArray());
            }
            OrderDetail::insert($orderDetailsArray);
            DB::commit();
            Session::forget('shopping_cart');
            Session::flash('success-msg','lưu hơn hàng thành công!');
        } catch (Exception $e) {
            DB::rollBack('error-msg', 'lưu đơn hàng thất bại');
        }
        return redirect('/shopping/list');
    }


    public function create_payment(Request $request)
    {
        $shopping_cart = Session::get('shoppingCart');

        $order = new Order();
        $order->fill($request->all());
        $amount = 0;
        foreach ($shopping_cart as $item){
            $amount += $item->price * $item->quantity;
        }
        $order->total_price = $amount;
        $order->save();

        foreach ($shopping_cart as $item) {
            $product = Product::find($item->id);
            $order_detail = new OrderDetail();
            $order_detail->orderId = $order->id;
            $order_detail->productId = $product->id;
            $order_detail->unitPrice = $product->price;
            $order_detail->quantity = $item->quantity;
            $order_detail->save();
            $this->delete_cart($item->id);
        }
        return view('/orders/list');
    }

    public function delete_cart($id){
        $shopping_cart = Session::get('shoppingCart');
        unset($shopping_cart[$id]);
        Session::put('shoppingCart', $shopping_cart);
    }
}
