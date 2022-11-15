<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movies;
use App\Models\Quotes;
use Illuminate\Validation\Rule;

class AdminQuoteController extends Controller
{
    public function create()
    {
        return view('admin.quotes.create', [
            'movies' => Movies::all()
        ]);
    }

    public function store()
    {

        $validated = request()->validate([
            'quote' => 'required|min:14|max:35',
            'image' => 'required|image',
            'movie_id' => ['required', Rule::exists('movies', 'id')]
        ]);

        $validated['image'] = request()->file('image')->store('images');

        Quotes::create([
            'quote' => $validated['quote'],
            'image' => $validated['image'],
            'movie_id' => $validated['movie_id'],
        ]);

        return redirect()->route('home');
    }
}
