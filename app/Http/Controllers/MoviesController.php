<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Quotes;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index() {
        return view('movies', [
            'quotes' => Quotes::all()->random(1)
        ]);
    }

    // public function show(Movies $movie) {
    //     return view('movie', [
    //         'quotes' => $movie
    //     ]);
    // }
}
