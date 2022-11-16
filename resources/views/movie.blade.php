@extends('components.layout')
@section('slot')
   <section>
       <div class="flex flex-col justify-center items-center">
           <div class="my-20 w-3xl">
               <h1 class="text-5xl text-white ml-3">{{ $movie->title }}</h1>
 
               @foreach ($movie->quote as $quote )
               <div class="mt-20 border-solid border-black border-1px rounded-xl">
                   <img src="/{{ $quote->image }}"  alt="movie-image" class="rounded-t-lg h-96 w-700px object-cover" >
                   <div class="bg-white h-28 -mt-5 rounded-b-lg">
                       <h2 class="text-3xl p-10 relative">"{{ $quote->quote }}"</h2>
                   </div>
               </div>
 
               @endforeach
           </div>
      
       </div>
   </section>
 
@endsection
