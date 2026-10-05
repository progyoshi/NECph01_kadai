<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\SentenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get(
    '/books/{book}/sentences/{sentence}/create',
    [SentenceController::class, 'create']
)->name('books.sentences.create')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
    Route::scopeBindings()->group(function () {
        Route::get(
            '/books/{book}/sentences/{sentence}/create',
            [SentenceController::class, 'create']
        )->name('books.sentences.create');

        Route::post(
            '/books/{book}/sentences/{sentence}',
            [SentenceController::class, 'store']
        )->name('books.sentences.store');

        Route::get(
            '/books/{book}/sentences/{sentence}',
            [SentenceController::class, 'show']
        )->name('books.sentences.show');
    });
});
