<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movies\StoreMoviesRequest;
use App\Models\Movie;

class AdminMovieController extends Controller
{
	public function index()
	{
		return view('admin.movies.all-movies', [
			'movie' => Movie::all(),
		]);
	}

	public function store(StoreMoviesRequest $request)
	{
		$attributes = $request->validated();

		Movie::create([
			'title' => [
				'en' => $attributes['title_en'],
				'ka' => $attributes['title_ka'],
			],
		]);

		return redirect()->route('movies.index', app()->getLocale())->with('success', __('text.movie_added!'));
	}

	public function edit($local, Movie $movie)
	{
		return view('admin.movies.edit', [
			'movie' => $movie,
		]);
	}

	public function update($local, Movie $movie, StoreMoviesRequest $request)
	{
		$attributes = $request->validated();

		$movie->update([
			'title' => [
				'en' => $attributes['title_en'],
				'ka' => $attributes['title_ka'],
			],
		]);

		return redirect()->route('movies.index', app()->getLocale())->with('success', __('text.movie_updated!'));
	}

	public function destroy($local, Movie $movie)
	{
		$movie->delete();

		return back()->with('success', __('text.movie_deleted!'));
	}
}
