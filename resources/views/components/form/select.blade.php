@props(['disabled' => false])

<select
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge([
        'class' => 'block mt-2 w-full px-2 py-2 rounded-md border-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
    ])!!}
>
    {{ $slot }}
</select>
