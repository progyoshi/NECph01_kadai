<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
});
