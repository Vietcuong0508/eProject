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
        return view('home/list', ['list' => Product::paginate(10)]);
    }

    public function index(Request $request)
    {
        $queryBuilder = Product::query();
        $search = $request->query('search');
        if ($search && strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('title', 'like', '%' .$search. '%');
        }
        $events = $queryBuilder->paginate(10)->appends(['search' => $search]);
        return view('products/list-product', [
            'list' => $events,
        ]);
    }

    public function indexProduct()
    {
        Product::paginate(20);
        return view('home/product', ['list' => Product::paginate(20)]);
    }

    public function create()
    {
        return view('products/form');
    }


    public function store(Request $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $product->save();
        return redirect('/');
    }

    public function show(Product $Product)
    {
        //
    }


    public function edit($id)
    {
        $detail = Product::find($id);
        return view('products/edit', [
            'edit'=>$detail
        ]);
    }

    public function update(Request $request, $id)
    {
        $detail = Product::find($id);
        $detail->update($request->all());
        $detail->save();
        return redirect('/admin/list-product');
    }


    public function destroy($id)
    {
        $detail = Product::find($id);
        $detail->delete();
        return redirect('/admin/list-product');
    }

}
