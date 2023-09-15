<x-form.holder>
    <button {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'items-center px-4 py-2 bg-app-primary-light hover:bg-app-primary rounded-md font-medium text-white border-2 border-app-primary hover:border-app-primary-dark focus:outline-none disabled:opacity-25 transition ease-in-out duration-150'
    ]) }}>
        {{ $slot }}
    </button>
</x-form.holder>
