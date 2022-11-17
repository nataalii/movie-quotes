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
           <a href="{{ route('home', app()->getLocale()) }}" class="mx-6">{{ __('Welcome')  }}!</a>
           <a href="{{ route('movies_index', app()->getLocale()) }}">{{ __('See All Movies') }}</a>
 
 
           <form method="POST" action="{{ route('signout', app()->getLocale()) }}"
            class="font-semibold text-blue-50 ml-6">
               @csrf
               <button type="submit">{{ __('Sign Out') }}</button>
           </form>
 
       @else
           <a href="{{ route('signin', app()->getLocale()) }}" class="ml-6 text-white uppercase">{{ __('Sign In') }}</a>
       @endauth
   </div>
 
   @yield('slot')
   @extends('success')
 
</body>
</html>
