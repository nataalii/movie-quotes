<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @vite('resources/css/app.css')
 
   <title>Movies</title>
</head>
 
 
<body class=" h-screen  bg-gradient-radial from-matterhorn via-eclipse to-eclipse font-sansation">
   <div class="text-white uppercase absolute mt-6 flex right-14">
       @auth
           <a href="{{ route('home', app()->getLocale()) }}" class="mx-6">{{ __('text.home_page')  }}</a>
           <a href="{{ route('quotes.all', app()->getLocale()) }}">{{ __('text.see_all_quotes') }}</a>
 
 
           <form method="POST" action="{{ route('logout', app()->getLocale()) }}"
            class="font-semibold text-blue-50 ml-6">
               @csrf
               <button type="submit">{{ __('text.sign_out') }}</button>
           </form>
 
       @else
           <a href="{{ route('login', app()->getLocale()) }}" class="ml-6 text-white uppercase">{{ __('text.sign_in') }}</a>
       @endauth
   </div>
 
   @yield('slot')
   @extends('success')
 
</body>
</html>
