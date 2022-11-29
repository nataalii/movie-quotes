<!DOCTYPE html>
<html lang="en"  class="h-full bg-gray-300">
  <link rel="icon" type="image/png" href="{{asset('storage/' . 'images/cinema-favicon.png') }}">
  <title>Sign In</title>
@vite('resources/css/app.css')
 
<body class="h-full">
   <x-lan-buttons english="{{ route(Route::currentRouteName(),[ 'en']) }}"
   georgian="{{ route(Route::currentRouteName(),[ 'ka'])}}" />
 
   <div class="flex min-h-full">
       <div class="flex flex-1 flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
         <div class="mx-auto w-full max-w-sm lg:w-96">
           <div>
             <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">{{ __('text.sign_in_to_your_account') }}</h2>
           </div>
    
           <div class="mt-8">
             <div class="mt-6">
               <form action="{{ route('login.post', app()->getLocale()) }}" method="POST" class="space-y-6">
                 @csrf
                 <div>
                   <label for="email" class="block text-sm font-medium text-gray-700 ">{{ __('text.email_address') }}</label>
                   <div class="mt-1">
                     <input id="email" name="email" type="email"  value="{{ old('email') }}"  class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                   </div>
                   <x-error name="email"/>
                 </div>
    
                 <div class="space-y-1">
                   <label for="password" class="block text-sm font-medium text-gray-700">{{ __('text.password') }}</label>
                   <div class="mt-1">
                     <input id="password" name="password" type="password" {{ old('email') }}  class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                   </div>
                   <x-error name="password"/>
 
                 </div>
    
                 <div>
                   <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{__("text.sign_in")  }}</button>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
       <div class="relative hidden w-0 flex-1 lg:block">
         <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80" alt="">
       </div>
     </div>
 
     @extends('success')
 
  
</body>
</html>
 
