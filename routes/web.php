<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SessionsController;
use App\Models\Movies;
use Illuminate\Support\Facades\Route;



Route::get('/', [MoviesController::class, 'index'])->name('home');
Route::get('movie/{movie:id}', [MoviesController::class, 'show'])->name('movie_id');

Route::get('signin', [SessionsController::class,'create'])->name('signin')->middleware('guest');
Route::post('signin', [SessionsController::class,'store'])->name('signin')->middleware('guest');

Route::post('signout', [SessionsController::class,'destroy'])->name('signout')->middleware('auth');

// Admnin Movies
Route::get('admin/movies/create', [AdminMovieController::class, 'create'])->name('create_movie')->middleware('admin');
Route::post('admin/movies', [AdminMovieController::class, 'store'])->name('movies_store')->middleware('admin');

Route::get('admin/movies', [AdminMovieController::class, 'index'])->name('movies_index')->middleware('admin');
Route::get('admin/movies/{movie}/edit', [AdminMovieController::class, 'edit'])->name('edit_movie')->middleware('admin');
Route::patch('admin/movies/{movie}', [AdminMovieController::class, 'update'])->name('update_movie')->middleware('admin');
Route::delete('admin/movies/{movie}', [AdminMovieController::class, 'destroy'])->name('delete_movie')->middleware('admin');

// Admin Quotes
Route::get('admin/quotes/create', [AdminQuoteController::class, 'create'])->name('create_quote')->middleware('admin');
Route::get('admin/quotes', [AdminQuoteController::class, 'index'])->name('quotes_index')->middleware('admin');
Route::post('admin/quotes', [AdminQuoteController::class, 'store'])->name('quotes_store')->middleware('admin');
