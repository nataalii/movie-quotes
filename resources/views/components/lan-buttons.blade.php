@props(['english', 'georgian'])

<div class="flex flex-col fixed mt-23% space-y-3 ml-4 ">
    <button class="bg-transparent text-white w-12 h-12 rounded-full border-white border-solid border">
        <a href="{{ $english }}">{{ __('en') }}</a>
    </button>
    <button class="bg-white w-12 h-12 rounded-full ">
        <a href="{{ $georgian }}">{{ __('ka') }}</a>
    </button>
</div>