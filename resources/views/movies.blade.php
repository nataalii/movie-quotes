@extends('components.layout')
@section('slot')
        <x-lan-buttons english="en" georgian="ka"/>
       <section>
           <div class="flex flex-col justify-center items-center h-screen bg-gradient-to-r from-matterhorn to-eclipse">
               @foreach ($quotes as $quote)
               <div>
                    @if (substr($quote->image, 0, 5) == 'https')
                            <img src="{{asset($quote->image )}}"  alt="movie-image" class="rounded-t-lg h-96 w-700px object-cover" >
                    @else
                        <img src="{{asset('storage/' . $quote->image) }}"  alt="movie-image" class="rounded-t-lg h-96 w-700px object-cover" >
                    @endif               
               </div>
               <p class="font-normal text-5xl text-white mt-16">"{{ $quote->quote }}"</p>
                   <a class="font-normal text-5xl text-white mt-24 underline"
                       href="{{ route('movie.id', [app()->getLocale(), $quote->movie->id]) }}">{{ $quote->movie->title }}
                   </a> 
               @endforeach
      
           </div>
       </section>
 
@endsection
