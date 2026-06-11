<?php

use App\Http\Controllers\DndController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('dnd/{type}', [DndController::class, 'list'])
->where('type', 'array|json|collection');;