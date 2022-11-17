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
            'title_ka' => 'required|min:2',
            'title_en' => 'required|min:2'
        ]);

        Movies::create([
            'title' => [
                'en' =>$attributes['title_en'],
                'ka' =>$attributes['title_ka'],
             ],
        ]);

        return redirect()->route('movies_index', app()->getLocale())->with('success', 'Movie added!');


    }

    public function edit($local, Movies $movie)
    {
        return view('admin.movies.edit', [
            'movie' => $movie
        ]);
    }

    public function update($local, Movies $movie){
        $attributes = request()->validate([
            'title_ka' => 'required|min:2',
            'title_en' => 'required|min:2'
        ]);

        $movie->update([
            'title' => [
                'en' =>$attributes['title_en'],
                'ka' =>$attributes['title_ka'],
             ],
        ]);

        return redirect()->route('movies_index', app()->getLocale())->with('success', 'Movie updated!');

    }

    public function destroy($local, Movies $movie)
    {
        $movie->delete();

        return back()->with('success', 'Movie Deleted!');
    }
}
