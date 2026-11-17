<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // Display all products
    public function index()
    {
        $products = DB::table('products')->get();

        return view('products', compact('products'));
    }

    // Show add product form
    public function create()
    {
        return view('add-product');
    }

    // Store new product
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'category' => 'required'
        ]);

        $product = [
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'created_at' => now(),
            'updated_at' => now()
        ];

        DB::table('products')->insert($product);

        return redirect('/products');
    }

    // Show edit form
    public function edit($id)
    {
        $product = DB::table('products')
            ->where('id', $id)
            ->first();

        if (!$product) {
            abort(404);
        }

        return view('edit-product', compact('product'));
    }

    // Update product
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'category' => 'required'
        ]);

        DB::table('products')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'price' => $request->price,
                'category' => $request->category,
                'updated_at' => now()
            ]);

        return redirect('/products');
    }

    // Delete product
    public function destroy($id)
    {
        DB::table('products')
            ->where('id', $id)
            ->delete();

        return redirect('/products');
    }
}
