<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})
->name('home')
;


Route::get('/product/{id}', [ProductController::class, 'getProductDetails'])
->name('productId')
;