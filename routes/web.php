<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    $categories = [
        'Phones',
        'Computers',
        'Accessories'
    ];

    return view('home', compact('categories'));
});

Route::get('/products', function () {

    $products = DB::table('products')->get();

    return view('products', compact('products'));
});

Route::get('/add-product', function () {
    return view('add-product');
});

Route::post('/add-product', function (Request $request) {

    $product = [
        'name' => $request->name,
        'price' => $request->price,
        'category' => $request->category,
        'created_at' => now(),
        'updated_at' => now()
    ];

    DB::table('products')->insert($product);

    return redirect('/products');
});

Route::post('/delete/{id}', function ($id) {

    DB::table('products')
        ->where('id', $id)
        ->delete();

    return redirect('/products');
});

Route::post('/edit/{id}', function ($id) {

    $product = DB::table('products')
        ->where('id', $id)
        ->first();

    return view('add-product', compact('product'));
});

Route::post('/update', function (Request $request) {

    $id = $request->id;

    DB::table('products')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'updated_at' => now()
        ]);

    return redirect('/products');
});