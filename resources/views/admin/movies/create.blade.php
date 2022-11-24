@extends('components.layout')
@section('slot')
<x-lan-buttons english="{{ route(Route::currentRouteName(),[ 'en']) }}"
  georgian="{{ route(Route::currentRouteName(),[ 'ka'])}}"/>
  
<x-dashboard>
    <form method="POST" action="{{ route('movies.store', app()->getLocale()) }}" class="flex items-center py-64 justify-center px-4 sm:px-6 lg:px-8 flex-col">
      @csrf
      <label for="movie" class="block text-3xl text-white">{{ __('text.add_a_movie') }}</label>
      <div class="mt-5">
        <input id="movie" name="title_en"  class="block w-full h-11 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3" placeholder="{{ __('text.title_in_eng') }}" value="{{ old('title_en') }}">
      </div>
      <x-error name="title_en"/>
  
      <div class="mt-5">
          <input id="movie" name="title_ka"  class="block w-full h-11 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3" placeholder="{{ __('text.title_in_ge') }}" value="{{ old('title_ka') }}">
        </div>
        <x-error name="title_ka"/>
      <div>
          <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 mt-6 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{ __('text.add') }} </button>
      </div>
  </form>

</x-dashboard>

@endsection
  