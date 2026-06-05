<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'contactView']);

Route::get('/languages', [languageController::class, 'list'])->name("lang");
Route::get('/languages/{lang}', [languageController::class, 'details'])->name("langdetails");