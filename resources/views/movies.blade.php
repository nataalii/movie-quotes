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
  
        <section>
            <div class="flex flex-col justify-center items-center h-screen bg-gradient-to-r from-matterhorn to-eclipse">
                @foreach ($quotes as $quote)
                    <img src="/images/image.svg" alt="movie-image" >
                    <p class="font-normal text-5xl text-white mt-10 ">{{ $quote->quote }}</p>
                    <a class="font-normal text-5xl text-white mt-20 underline" 
                        href="/movie/{{ $quote->movie->id}}">{{ $quote->movie->title }}
                    </a>  
                @endforeach
        
            </div>
        </section>
  
    </body>
 
</html>
