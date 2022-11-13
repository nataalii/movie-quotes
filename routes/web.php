<?php

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SessionsController;
use App\Models\Movies;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MoviesController::class, 'index']);
Route::get('movie/{movie:id}', [MoviesController::class, 'show']);

Route::get('signin', [SessionsController::class,'create'])->middleware('guest');
Route::post('signin', [SessionsController::class,'store'])->middleware('guest');




Route::post('signout', [SessionsController::class,'destroy'])->middleware('auth');


