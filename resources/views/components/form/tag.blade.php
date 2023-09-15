@props([
    'href',
    'isActive'
])

<a
    href="{{ $href }}"
    class="text-sm py-1 px-2 rounded cursor-pointer transition-all
     {{ $isActive ? "bg-app-primary-light hover:bg-app-primary text-white" : "bg-gray-200 hover:bg-gray-300 text-app-text-black " }}"
>
    {{ $slot }}
</a>
