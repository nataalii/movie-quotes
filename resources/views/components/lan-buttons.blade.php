@props(['english', 'georgian'])

<div class="flex flex-col fixed mt-23% space-y-3 ml-4 ">
    <button class=" w-12 h-12 rounded-full
        @if(app()->getLocale() === 'en')
             bg-transparent text-white border-white border-solid border
        @else
             bg-white 
        @endif ">
        <a href="{{ $english }}">{{ __('text.en') }}</a>
    </button>

    <button class=" w-12 h-12 rounded-full
        @if(app()->getLocale() === 'en')
          bg-white
        @else
            bg-transparent text-white border-white border-solid border
        @endif ">
        <a href="{{ $georgian }}">{{ __('text.ka')}}</a>
    </button>
</div>
