<?php

namespace App\Http\Controllers;

use App\Http\Requests\Movies\StoreMoviesRequest;
use App\Models\Movies;

class AdminMovieController extends Controller
{
	public function index()
	{
		return view('admin.movies.all-movies', [
			'movie' => Movies::all(),
		]);
	}

	public function create()
	{
		return view('admin.movies.create');
	}

	public function store(StoreMoviesRequest $request)
	{
		$attributes = $request->validated();

		Movies::create([
			'title' => [
				'en' => $attributes['title_en'],
				'ka' => $attributes['title_ka'],
			],
		]);

		return redirect()->route('movies.index', app()->getLocale())->with('success', __('text.movie_added!'));
	}

	public function edit($local, Movies $movie)
	{
		return view('admin.movies.edit', [
			'movie' => $movie,
		]);
	}

	public function update($local, Movies $movie, StoreMoviesRequest $request)
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

	public function destroy($local, Movies $movie)
	{
		$movie->delete();

		return back()->with('success', __('text.movie_deleted!'));
	}
}
