@props(['english', 'georgian'])

<div class="flex flex-col fixed mt-23% space-y-3 ml-4 ">
    <a href="{{ $english }}">
        <button class=" w-12 h-12 rounded-full
            @if(app()->getLocale() === 'en')
                bg-white 
            @else
                bg-transparent text-white border-white border-solid border
            @endif ">
            {{  __('text.en')  }}
        </button>
    </a>

    <a href="{{ $georgian }}">
        <button class=" w-12 h-12 rounded-full
            @if(app()->getLocale() === 'en')
                bg-transparent text-white border-white border-solid border
            @else
            bg-white
            @endif ">
            {{ __('text.ka')}}
        </button>
    </a>
</div>
