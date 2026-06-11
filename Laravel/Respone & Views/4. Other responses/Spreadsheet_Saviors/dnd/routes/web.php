<?php

use App\Http\Controllers\DndController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index']);
Route::get('/home', [homeController::class, 'index']);

Route::get('/dnd/pdf', [DndController::class, 'table']);
Route::get('/dnd/pdf', [DndController::class, 'downloadPdf']);

Route::get('/dnd/excel', [DndController::class, 'excel']);

Route::get('/dnd/download', [DndController::class, 'download']);