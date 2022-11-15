@extends('components.layout')
@section('slot')
        <section>
            <div class="flex flex-col justify-center items-center h-screen bg-gradient-to-r from-matterhorn to-eclipse">
                @foreach ($quotes as $quote)
                <div>
                    <img src="/{{ $quote->image }}"  alt="movie-image" class="rounded-t-lg h-96 w-3xl">
                </div>
                <p class="font-normal text-5xl text-white mt-16">"{{ $quote->quote }}"</p>
                    <a class="font-normal text-5xl text-white mt-24 underline"
                        href="{{ route('movie_id', $quote->movie->id) }}">{{ $quote->movie->title }}
                    </a>  
                @endforeach
        
            </div>
        </section>

@endsection
