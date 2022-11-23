@props(['slot'])
<div class="flex justify-center p-20 h-full">
    <div class="px-4 sm:px-6 lg:px-8 w-3/5">
          <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
              <a href="{{ route('movies.store', app()->getLocale()) }}" class="text-3xl font-semibold text-white">
                {{ __('text.movies') }}
              </a>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
              <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto mr-3">
                  <a href="{{ route('create.movie', app()->getLocale()) }}">{{ __('text.add_movie') }}</a>
              </button>
              <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                <a href="{{ route('create.quote', app()->getLocale()) }}">{{ __('text.add_quote') }}</a>
            </button>
            </div>
          </div>
          {{ $slot }}
  
    </div>  
  
</div>