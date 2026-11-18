<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/users', [UserController::class, 'index']);

Route::get('/add-user', [UserController::class, 'create']);

Route::post('/add-user', [UserController::class, 'store']);

Route::get('/edit-user/{id}', [UserController::class, 'edit']);

Route::post('/update-user/{id}', [UserController::class, 'update']);

Route::post('/delete-user/{id}', [UserController::class, 'destroy']);