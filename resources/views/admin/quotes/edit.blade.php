@extends('components.layout')
@section('slot')
<x-lan-buttons english="{{ route(Route::currentRouteName(),[ 'en', $quote->id]) }}"
  georgian="{{ route(Route::currentRouteName(),[ 'ka', $quote->id])}}"/>

<x-dashboard>
  <div class="flex items-center justify-center h-full">
    <form method="POST" action="{{ route('quote.update', [app()->getLocale(), $quote->id]) }}" enctype="multipart/form-data" class="space-y-8 divide-y divide-gray-200 w-3/5 bg-white rounded-xl">
        @csrf
        @method('patch')
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5 p-10">
          <div class="space-y-6 sm:space-y-5">
            <div>
              <h3 class="text-lg font-medium leading-6 text-gray-900"> {{ __('Edit Quote') }}</h3>
              <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ __('Here you can edit quotes from a movie') }}</p>
            </div>
      
            <div class="space-y-6 sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                  
                    <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{ __('Quote') }}</label>
                    <div class="mt-1 sm:col-span-2 sm:mt ">
                      <input id="quote" name="quote_ka" value="{{$quote->getTranslation('quote', 'ka')}}" type="quote"  placeholder="{{ __('Quotes in Georgian') }}" class="block bg-gray-100  p-3 w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      <x-error name="quote_ka"/>

                      <input id="quote" name="quote_en" value="{{$quote->getTranslation('quote', 'en')}}" type="quote"  placeholder="{{ __('Quotes in English') }}" class="block bg-gray-100  p-3 w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm mt-6">
                      <x-error name="quote_en"/>

                    </div>
                </div>
      
              <div class="sm:grid sm:grid-cols-1 sm:items-start sm:gap-5 sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{ __('Upload Image') }}</label>
                <div class="flex text-sm text-gray-600 justify-between">
                  <label for="image" class="relative cursor-pointer rounded-md bg-white font-medium  text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                    <input id="image" name="image" type="file" class="">
                  </label>
                  <img src="/{{ $quote->image }}" alt="image " class="rounded-xl" width="100">

                </div>

                
                <x-error name="quote_image"/>

              </div>
            </div>
          </div>
      
          <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">

              <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:pt-5">
                <label for="movie_id" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">{{ __('Movie') }}</label>
                <div class="mt-1 sm:col-span-2 sm:mt-0">
                  <select id="movie_id" name="movie_id" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm p-3">
                    @foreach ($movies as $movie )
                        <option 
                        value="{{ $movie->id }}"
                        {{ old('movie_id', $quote->movie_id) == $movie->id ? 'selected' : ''}}
                        > {{ucwords($movie->title) }}</option>
                    @endforeach
                  </select>
                </div>
               </div>
               <x-error name="quote_movie"/>
            </div>
          
        </div>
      
        <div class="pt-5 flex justify-end p-7">
            <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{ __('Update') }}</button>
        </div>
      </form>
  </div>

</x-dashboard> 


@endsection