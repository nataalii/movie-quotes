@if (session()->has('success'))
<div x-data="{ show: true }"
    x-init="setTimeout(() => show = false, 3000)"
    x-show="show"
    class="fixed bg-emerald-700 opacity-75 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session('success') }}</p>
</div>
@endif