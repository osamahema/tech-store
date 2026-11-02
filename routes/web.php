
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

    return view('product-added', compact('product'));
});
