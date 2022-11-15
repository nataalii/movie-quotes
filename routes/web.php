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
 
Route::middleware('admin')->group(function() {
   Route::get('admin/movies/create', [AdminMovieController::class, 'create'])->name('create_movie');
   Route::post('admin/movies', [AdminMovieController::class, 'store'])->name('movies_store');
  
   Route::get('admin/movies', [AdminMovieController::class, 'index'])->name('movies_index');
   Route::get('admin/movies/{movie}/edit', [AdminMovieController::class, 'edit'])->name('edit_movie');
   Route::patch('admin/movies/{movie}', [AdminMovieController::class, 'update'])->name('update_movie');
   Route::delete('admin/movies/{movie}', [AdminMovieController::class, 'destroy'])->name('delete_movie');
  
   Route::get('admin/quotes/create', [AdminQuoteController::class, 'create'])->name('create_quote');
   Route::get('admin/quotes', [AdminQuoteController::class, 'index'])->name('quotes_index');
   Route::post('admin/quotes', [AdminQuoteController::class, 'store'])->name('quotes_store');
  
   Route::get('admin/movie/{movie:id}', [AdminQuoteController::class, 'show'])->name('movie_quotes');
   Route::get('admin/quotes/{quote}/edit', [AdminQuoteController::class, 'edit'])->name('edit_quote');
   Route::patch('admin/quotes/{quote}', [AdminQuoteController::class, 'update'])->name('quote_update');
   Route::delete('admin/quotes/{quote}', [AdminQuoteController::class, 'destroy'])->name('delete_quote');
  
});
