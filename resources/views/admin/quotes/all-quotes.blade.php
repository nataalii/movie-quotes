@extends('components.layout')
@section('slot')
<x-lan-buttons english="{{ route(Route::currentRouteName(),[ 'en']) }}"
  georgian="{{ route(Route::currentRouteName(),[ 'ka'])}}"/>

  <x-dashboard>
    <div class="sm:px-6 lg:px-8 absolute p-16 w-7/12 -mx-16">
      <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
          <p class="mt-4 text-sm text-white">{{ __('text.all_quotes') }} </p>
        </div>
      </div>
      <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
              <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">{{ __('text.quote') }}</th>
                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                          <span class="sr-only">Edit</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                  @foreach ($quotes as $quote)
                       <tr>
                      <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                        <div class="flex items-center">
                          <div class="h-28 w-48">
                            <img class=" h-24 w-36 rounded-lg object-cover" src="/{{ $quote->image }}" alt="">
                          </div>
                          <div class="ml-4">
                            <div class=" text-2xl text-gray-900">"{{ $quote->quote }}"</div>
                          </div>
                        </div>
                      </td>
    
                      <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-lg font-medium sm:pr-6">
                        <a href="{{ route('edit.quote', [app()->getLocale(), $quote->id]) }}" class="text-indigo-600 hover:text-indigo-900">{{ __('text.edit') }}</a>
                      </td>
                      <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-lg font-medium sm:pr-6">
                          <form action="{{ route('delete.quote', [app()->getLocale(), $quote->id]) }}" method="POST">
                              @csrf
                              @method('DELETE')
    
                              <button class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')"">
                                  {{ __('text.delete') }}
                              </button>
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
  </x-dashboard>

 
@endsection
