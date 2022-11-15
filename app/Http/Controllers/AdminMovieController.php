<?php

namespace App\Http\Controllers;

use App\Models\Movies;

class AdminMovieController extends Controller
{
    public function index()
    {
        return view('admin.movies.all-movies', [
            'movie' => Movies::all()
        ]);
    }

    public function create()
    {
        return view('admin.movies.create');
    }


    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required|min:2'
        ]);

        Movies::create([
            'title' => $attributes['title']
        ]);

        return redirect()->route('home');


    }

    public function edit(Movies $movie)
    {
        return view('admin.movies.edit', [
            'movie' => $movie
        ]);
    }

    public function update(Movies $movie){
        $attributes = request()->validate([
            'title' => 'required|min:2'
        ]);

        $movie->update($attributes);

        return redirect()->route('movies_index')->with('success', 'Movie updated!');

    }

    public function destroy(Movies $movie)
    {
        $movie->delete();

        return back()->with('success', 'Movie Deleted!');
    }
}
