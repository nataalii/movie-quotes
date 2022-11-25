@extends('components.layout')
@section('slot')
<x-lan-buttons english="{{ route(Route::currentRouteName(),[ 'en']) }}"
  georgian="{{ route(Route::currentRouteName(),[ 'ka'])}}"/>

<x-dashboard>
  <div class="m-10 flex flex-col">
    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
          <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">{{ __('text.title') }}</th>
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
                        <a href="{{ route('movie.quotes', [app()->getLocale(), $each->id] )}}">{{ $each->title }}</a>
                      </td>
                      <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                        <a href="{{ route('edit.movie', [app()->getLocale(), $each->id] )}}" class="text-indigo-600 hover:text-indigo-900">{{ __('text.edit') }}</a>
                      </td>
                      <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                        <form action="{{ route('delete.movie', [app()->getLocale(), $each->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:text-indigo-900 pt-3 " onclick="return confirm('Are you sure?')">{{ __('text.delete') }}</button>
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
</x-dashboard>

        

      

@endsection