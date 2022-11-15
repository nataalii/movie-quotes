<?php
 
use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
 
 
 
Route::get('/', [MoviesController::class, 'index'])->name('home');
Route::get('movie/{movie:id}', [MoviesController::class, 'show'])->name('movie_id');
 
Route::get('signin', [SessionsController::class,'create'])->name('signin')->middleware('guest');
Route::post('signin', [SessionsController::class,'store'])->name('signin')->middleware('guest');
 
Route::post('signout', [SessionsController::class,'destroy'])->name('signout')->middleware('auth');
 
 
// Admnin

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
   Route::get('movies/create', [AdminMovieController::class, 'create'])->name('create_movie');
   Route::post('/movies', [AdminMovieController::class, 'store'])->name('movies_store');
  
   Route::get('movies', [AdminMovieController::class, 'index'])->name('movies_index');
   Route::get('movies/{movie}/edit', [AdminMovieController::class, 'edit'])->name('edit_movie');
   Route::patch('movies/{movie}', [AdminMovieController::class, 'update'])->name('update_movie');
   Route::delete('movies/{movie}', [AdminMovieController::class, 'destroy'])->name('delete_movie');
  
   Route::get('quotes/create', [AdminQuoteController::class, 'create'])->name('create_quote');
   Route::get('quotes', [AdminQuoteController::class, 'index'])->name('quotes_index');
   Route::post('quotes', [AdminQuoteController::class, 'store'])->name('quotes_store');
  
   Route::get('movie/{movie:id}', [AdminQuoteController::class, 'show'])->name('movie_quotes');
   Route::get('quotes/{quote}/edit', [AdminQuoteController::class, 'edit'])->name('edit_quote');
   Route::patch('quotes/{quote}', [AdminQuoteController::class, 'update'])->name('quote_update');
   Route::delete('quotes/{quote}', [AdminQuoteController::class, 'destroy'])->name('delete_quote');     
});

