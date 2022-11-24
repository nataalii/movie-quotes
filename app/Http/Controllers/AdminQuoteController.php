<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quotes\StoreQuotesRequest;
use App\Http\Requests\Quotes\UpdateQuotesRequest;
use App\Models\Movie;
use App\Models\Quote;

class AdminQuoteController extends Controller
{
	public function create()
	{
		return view('admin.quotes.create', [
			'movies' => Movie::all(),
		]);
	}

	public function store(StoreQuotesRequest $request)
	{
		$validated = $request->validated();
		$validated['image'] = request()->file('image')->store('images');

		Quote::create([
			'quote' => [
				'ka' => $validated['quote_ka'],
				'en' => $validated['quote_en'],
			],
			'image'    => $validated['image'],
			'movie_id' => $validated['movie_id'],
		]);

		return redirect()->route('movies.index', app()->getLocale())->with('success', __('text.quote_added!'));
	}

	public function show($local, Movie $movie)
	{
		return view('admin.quotes.show', [
			'movie' => $movie,
		]);
	}

	public function edit($local, Quote $quote)
	{
		return view('admin.quotes.edit', [
			'quote'  => $quote,
			'movies' => Movie::all(),
		]);
	}

	public function update($local, Quote $quote, UpdateQuotesRequest $request)
	{
		$validated = $request->validated();

		if (isset($validated['image']))
		{
			$validated['image'] = request()->file('image');
		}

		$quote->update([
			'quote' => [
				'en' => $validated['quote_en'],
				'ka' => $validated['quote_ka'],
			],
			'image'    => $request->file('image')->store('images'),
			'movie_id' => $validated['movie_id'],
		]);

		return redirect()->route('movie.quotes', [app()->getLocale(), $quote->movie_id])->with('success', __('text.quote_updated!'));
	}

	public function destroy($local, Quote $quote)
	{
		$quote->delete();

		return back()->with('success', __('text.quote_deleted!'));
	}
}
