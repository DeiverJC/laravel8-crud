<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return redirect('products');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return redirect('products');
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect('products');
    }
}
