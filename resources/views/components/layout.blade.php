<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Movies</title>
</head>


<body class="h-max bg-gradient-radial from-matterhorn via-eclipse to-eclipse">
    {{-- <body class="bg-gradient-to-r from-matterhorn to-eclipse h-max font-sansation"> --}}
        <div class="flex flex-col fixed mt-23% space-y-3 ml-4 ">
        <button class="bg-transparent text-white w-12 h-12 rounded-full border-white border-solid border">en</button>
        <button class="bg-white w-12 h-12 rounded-full ">ka</button>
    </div>

    <div class="text-white uppercase absolute mt-6 flex right-14">
        @auth
            <span class="text-white uppercase mx-6">Welcome !</span>
            <a href="{{ route('movies_index') }}">See All Movies</a>


            <form method="POST" action="{{ route('signout') }}"
             class="font-semibold text-blue-50 ml-6">
                @csrf
                <button type="submit">Sign Out</button>
            </form>

        @else
            <a href="{{ route('signin') }}" class="ml-6 text-white uppercase">sign In</a>
        @endauth
    </div>

    @yield('slot')
    @extends('success')

</body>
</html>