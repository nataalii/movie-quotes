<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'], function () {
	Route::get('/', [MoviesController::class, 'index'])->name('home');
	Route::get('movie/{movie:id}', [MoviesController::class, 'show'])->name('movie.id');

	Route::view('signin', 'sessions.signin')->name('signin')->middleware('guest');
	Route::post('signin', [SessionsController::class, 'store'])->name('signin.post')->middleware('guest');

	Route::post('signout', [SessionsController::class, 'destroy'])->name('signout')->middleware('auth');
});

// Admnin

Route::group(['prefix' => '{language}/admin', 'middleware' => 'admin'], function () {
	Route::view('movies/create', 'admin.movies.create')->name('create.movie');
	Route::post('/movies', [AdminMovieController::class, 'store'])->name('movies.store');

	Route::get('movies', [AdminMovieController::class, 'index'])->name('movies.index');
	Route::get('movies/{movie}/edit', [AdminMovieController::class, 'edit'])->name('edit.movie');
	Route::patch('movies/{movie}', [AdminMovieController::class, 'update'])->name('update.movie');
	Route::delete('movies/{movie}', [AdminMovieController::class, 'destroy'])->name('delete.movie');

	Route::get('quotes/create', [AdminQuoteController::class, 'create'])->name('create.quote');
	Route::get('quotes', [AdminQuoteController::class, 'index'])->name('quotes.index');
	Route::post('quotes', [AdminQuoteController::class, 'store'])->name('quotes.store');

	Route::get('movie/{movie:id}', [AdminQuoteController::class, 'show'])->name('movie.quotes');
	Route::get('quotes/{quote}/edit', [AdminQuoteController::class, 'edit'])->name('edit.quote');
	Route::patch('quotes/{quote}', [AdminQuoteController::class, 'update'])->name('quote.update');
	Route::delete('quotes/{quote}', [AdminQuoteController::class, 'destroy'])->name('delete.quote');
});
