@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-base font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
