@extends('components.layout')
@section('slot')
<div class="bg-gradient-to-r from-matterhorn to-eclipse flex justify-center p-20 h-full">
    <div class="px-4 sm:px-6 lg:px-8 w-3/5">
        <div class="sm:flex sm:items-center">
          <div class="sm:flex-auto">
            <h1 class="text-3xl font-semibold text-white">{{ __('Movies') }}</h1>
            <p class="mt-2 text-sm text-white">{{ __('A list of all the Movies') }}.</p>
          </div>
          <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto mr-3">
                <a href="{{ route('create_movie') }}">{{ __('Add Movie') }}</a>
            </button>
            <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
              <a href="{{ route('create_quote') }}">{{ __('Add Quote') }}</a>
          </button>
          </div>
        </div>
        <div class="mt-8 flex flex-col">
          <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
              <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-300">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">{{ __('Title') }}</th>
                      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                        <span class="sr-only">Edit</span>
                      </th>
                      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                        <span class="sr-only">Delete</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($movie as $each )
                        <tr>
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">
                              <a href="{{ route('movie_quotes', $each->id )}}">{{ $each->title }}</a>

                            </td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                              <a href="{{ route('edit_movie', $each->id )}}" class="text-indigo-600 hover:text-indigo-900">{{ __('Edit') }}</a>
                            </td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                  <form action="{{ route('delete_movie', $each->id)}}" method="POST">

                                  @csrf
                                  @method('DELETE')
                                  <button class="text-red-600 hover:text-indigo-900 pt-3">{{ __('Delete') }}</button>
                              </form>
                            </td>
                        </tr>
                            
                        @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      @extends('success')

      
</div>

@endsection