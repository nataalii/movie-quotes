@extends('components.layout')
@section('slot')
<x-lan-buttons english="{{ route(Route::currentRouteName(),[ 'en', $movie->id]) }}"
  georgian="{{ route(Route::currentRouteName(),[ 'ka', $movie->id])}}"/>

  <x-dashboard>
    <div class="bg-gradient-to-r from-matterhorn to-eclipse ">
        <form method="POST" action="{{ route('update.movie', [app()->getLocale(), $movie->id]) }}" class="flex items-center justify-center p-60 px-4 sm:px-6 lg:px-8 flex-col">
            @csrf
            @method('PATCH')
            <label for="movie" class="block text-3xl text-white">{{ __('text.edit_a_movie') }}</label>
            <div class="mt-5">
            <input id="movie" name="title_en" value="{{ $movie->getTranslation('title', 'en') }}"  class="block w-full h-11 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3" placeholder="{{ __('text.title_in_eng') }}">
            </div>
            <x-error name="title_en"/>


            <div class="mt-5">
            <input id="movie" name="title_ka" value="{{ $movie->getTranslation('title', 'ka')}}"  class="block w-full h-11 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3" placeholder="{{ __('text.title_in_ge') }}">
            </div>
            <x-error name="title_ka"/>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 mt-6 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{ __('text.edit') }} </button>
            </div>
        </form>

   </div>
  </x-dashboard>
      
@endsection


  