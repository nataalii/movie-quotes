<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        @vite('resources/css/app.css')

    </head>
    <body >
        <div class="flex flex-col fixed mt-23% space-y-3 ml-4 ">
            <button class="bg-transparent text-white w-12 h-12 rounded-full border-white border-solid border">en</button>
            <button class="bg-white w-12 h-12 rounded-full ">ka</button>
        </div>

        <div class="absolute mt-6 flex right-14">
            @auth
                <span class="text-white uppercase ml-6">Welcome,   {{ auth()->user()->name}}!</span>

                <form id="logout-form" method="POST" action="/signout"
                 class="font-semibold text-blue-50 ml-6">
                    @csrf
                    <button type="submit">Sign Out</button>
                </form>
            @else
                <a href="/signin" class="ml-6 text-white uppercase">sign In</a>
            @endauth
        </div>
        

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

        @extends('success')

    </body>
 
</html>
