<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'], function () {
	Route::get('/', [MovieController::class, 'index'])->name('home');
	Route::get('movie/{movie:id}', [MovieController::class, 'show'])->name('movie.id');

	Route::view('login', 'sessions.login')->name('login')->middleware('guest');
	Route::post('login', [SessionsController::class, 'store'])->name('login.post')->middleware('guest');

	Route::post('logout', [SessionsController::class, 'destroy'])->name('logout')->middleware('auth');
});

// Admnin

Route::group(['prefix' => '{language}/admin', 'middleware' => 'auth'], function () {
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
