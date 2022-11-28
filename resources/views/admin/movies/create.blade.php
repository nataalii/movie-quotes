@extends('components.layout')
@section('slot')
<x-lan-buttons english="{{ route(Route::currentRouteName(),[ 'en']) }}"
 georgian="{{ route(Route::currentRouteName(),[ 'ka'])}}"/>
 <x-dashboard>
 <form class=" mt-64 w-450px m-auto" method="POST" action="{{ route('movies.store', app()->getLocale()) }}">
   @csrf
   <div class="rounded-md shadow-sm">
     <label for="movie" class="block mb-7 text-3xl text-white">{{ __('text.add_a_movie') }}</label>
     <div class="">
       <input id="movie" name="title_en"  class="block w-full h-14 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3" placeholder="{{ __('text.title_in_eng') }}" value="{{ old('title_en') }}">
     </div>
     <x-error name="title_en"/>
  
     <div class="mt-5">
         <input id="movie" name="title_ka"  class="block w-full h-14 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3" placeholder="{{ __('text.title_in_ge') }}" value="{{ old('title_ka') }}">
     </div>
     <x-error name="title_ka"/>
   </div>
 
   <div>
     <button type="submit" class="flex h-12 w-full justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-4 mt-6 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{ __('text.add') }} </button>
   </div>
 </form>
 
</x-dashboard>
 
@endsection
