<div
    {{ $attributes->merge([
        'class' => 'text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 transition'
    ]) }}
>
    {{ $slot }}
</div>
