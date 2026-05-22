<?php

use App\Http\Controllers\DumpController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dump', [DumpController::class, 'dumpWeb']);
Route::get('/dumpDie', [DumpController::class, 'dumpDie']);
Route::get('/hotels/{city?}/{min_availability?}', [HotelController::class, 'HotelWeb']);