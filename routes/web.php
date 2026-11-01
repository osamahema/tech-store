<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {

    $categories = [
        'Phones',
        'Computers',
        'Accessories'
    ];

    return view('home', compact('categories'));
});

Route::get('/products', function () {

    $products = [
        ['name' => 'iPhone 15', 'price' => 2500, 'category' => 'Phones'],
        ['name' => 'Samsung Galaxy S24', 'price' => 2200, 'category' => 'Phones'],
        ['name' => 'Lenovo Laptop', 'price' => 3000, 'category' => 'Computers'],
        ['name' => 'Wireless Mouse', 'price' => 50, 'category' => 'Accessories']
    ];

    return view('products', compact('products'));
});

Route::get('/add-product', function () {
    return view('add-product');
});

Route::post('/add-product', function (Request $request) {

    $product = [
        'name' => $request->name,
        'price' => $request->price,
        'category' => $request->category
    ];

    return view('product-added', compact('product'));
});