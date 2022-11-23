<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class MovieController extends Controller
{
	public function index()
	{
		return view('movies', [
			'quotes' => Quote::all()->random(1),
			'name'   => auth()->user(),
		]);
	}

	public function show($local, Movie $movie)
	{
		return view('movie', [
			$local  => app()->getLocale(),
			'movie' => $movie,
		]);
	}
}
