<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Quotes;

class MoviesController extends Controller
{
	public function index()
	{
		return view('movies', [
			'quotes' => Quotes::all()->random(1),
			'name'   => auth()->user(),
		]);
	}

	public function show($local, Movies $movie)
	{
		return view('movie', [
			$local  => app()->getLocale(),
			'movie' => $movie,
		]);
	}
}
