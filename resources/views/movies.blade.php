@extends('components.layout')
@section('slot')
        <section>
            <div class="flex flex-col justify-center items-center h-screen bg-gradient-to-r from-matterhorn to-eclipse">
                @foreach ($quotes as $quote)
                    <img src="/images/image.svg" alt="movie-image" class="rounded-tl-xl" >
                    <p class="font-normal text-5xl text-white mt-10 ">"{{ $quote->quote }}"</p>
                    <a class="font-normal text-5xl text-white mt-20 underline"
                        href="/movie/{{ $quote->movie->id}}">{{ $quote->movie->title }}
                    </a>  
                @endforeach
        
            </div>
        </section>

@endsection
