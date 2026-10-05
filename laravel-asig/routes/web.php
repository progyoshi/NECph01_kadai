<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\SentenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [BookController::class, 'index'])->name('dashboard');
    Route::resource('books', BookController::class)->except(['index']);
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
