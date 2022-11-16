<?php
 
namespace App\Http\Controllers;
 
use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movies;
use App\Models\Quotes;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rule;
 
class AdminQuoteController extends Controller
{
   public function create()
   {
       return view('admin.quotes.create', [
           'movies' => Movies::all(),
       ]);
   }
 
   public function store()
   {
 
       $validated = request()->validate([
           'quote_ka' => 'required|min:14|max:36',
           'quote_en' => 'required|min:14|max:36',
           'image' => 'required|image',
           'movie_id' => ['required', Rule::exists('movies', 'id')]
       ]);
 
       $validated['image'] = request()->file('image')->store('images');
 
       Quotes::create([
           'quote' => [
                'ka' => $validated['quote_ka'],
                'en' => $validated['quote_en']
            ],
           'image' => $validated['image'],
           'movie_id' => $validated['movie_id'],
       ]);
 
       return redirect()->route('movies_index', app()->getLocale())->with('success', "Quote Added!");
   }
 
   public function show($local, Movies $movie)
   {
       return view('admin.quotes.show', [
           'movie' => $movie
       ]);
   }
 
   public function edit($local, Quotes $quote)
   {
       return view('admin.quotes.edit', [
           'quote' => $quote,
           'movies' => Movies::all()
       ]);
   }
 
  
   public function update($local, Quotes $quote)
   {
       $validated = request()->validate([
            'quote_ka' => 'required|min:14|max:36',
            'quote_en' => 'required|min:14|max:36',
            'image' => 'image',
            'movie_id' => ['required', Rule::exists('movies', 'id')]       

       ]);
 
       if(isset($validated['image'])){
           $validated['image'] = request()->file('image');
       }

       $quote->update([
            'quote' => [
                'en' =>$validated['quote_en'],
                'ka' =>$validated['quote_ka'],
            ],
            'movie_id' => $validated['movie_id']     
       ]);
 
       return redirect()->route('movie_quotes', [app()->getLocale(), $quote->movie_id])->with('success', 'Quote Updated!');
 
   }
 
   public function destroy($local, Quotes $quote)
   {
       $quote->delete();
       return back()->with('success', 'Quote Deleted!');
   }
 
 
}
