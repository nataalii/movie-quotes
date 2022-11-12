@vite('resources/css/app.css')
 
<body class="">
    <div class="flex flex-col fixed mt-23% space-y-3 ml-4 ">
        <button class="bg-transparent text-white w-12 h-12 rounded-full border-white border-solid border">en</button>
        <button class="bg-white w-12 h-12 rounded-full ">ka</button>
    </div>

    <section>
        <h1 class="text-5xl text-white text-left m-20 text-lelft absolute w-700px mx-31%">{{ $movie->title }}</h1>

        <div class="flex flex-col justify-center items-center bg-gradient-to-r from-matterhorn to-eclipse ">
            <div class="mt-56">
                @foreach ($movie->quote as $quote )  
                <div class="m-10 border-solid border-black border-1px rounded-xl">
                    <img src="/images/image.svg" alt="movie-image" class="rounded-t-lg" >
                    <div class="bg-white h-28 -mt-5 rounded-b-lg">
                        <h2 class="text-4xl p-10 relative">"{{ $quote->quote }}"</h2>
                    </div>
                </div>

                @endforeach
            </div>
            
            
        </div>
    </section>
 
</body>