<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function listHome()
    {
        Product::paginate(10);
        return view('home-page/list', ['list' => Product::paginate(10)]);
    }

    public function indexProduct()
    {
        Product::paginate(20);
        return view('home-page/product', ['list' => Product::paginate(20)]);
    }

    public function create()
    {
        return view('products/create');
    }


    public function store(Request $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $product->save();
        return redirect('/home-page');
    }

    public function show(Product $Product)
    {
        //
    }


    public function edit($id)
    {
        $detail = Product::find($id);
        return view('manager/form-user', [
            'edit'=>$detail
        ]);
    }

    public function update(Request $request, $id)
    {
        $detail = Product::find($id);
        $detail->update($request->all());
        $detail->save();
        return redirect('manager/form-user');
    }


    public function destroy($id)
    {
        $detail = Product::find($id);
        $detail->delete();
        return redirect('manager/form-user');
    }

}
