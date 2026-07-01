<?php

use App\Http\Controllers\TshirtController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tshirts', [TshirtController::class, 'showTshirt'])->name('tshirt');
Route::get('/tshirts-sorted', [TshirtController::class, 'sortTshirt'])->name('tshirt');
Route::get('/tshirt/{id}', [TshirtController::class, 'showDetails'])->name('tshirtByName');

Route::get('/category/{categorieName}', [CategoryController::class, 'showCategorie'])->name('tshirt');
Route::get('/color/{colorName}', [ColorController::class, 'showColor']);