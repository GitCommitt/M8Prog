<?php

use App\Http\Controllers\DndController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index']);
Route::get('/home', [homeController::class, 'index']);
Route::get('/pdf', [DndController::class, 'table']);
Route::get('/pdf', [DndController::class, 'downloadPdf']);