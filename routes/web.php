<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    $categories = [
        'Phones',
        'Computers',
        'Accessories'
    ];

    return view('home', compact('categories'));
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/add-product', [ProductController::class, 'create']);

Route::post('/add-product', [ProductController::class, 'store']);

Route::get('/edit/{id}', [ProductController::class, 'edit']);

Route::post('/update/{id}', [ProductController::class, 'update']);

Route::get('/delete/{id}', [ProductController::class, 'destroy']);