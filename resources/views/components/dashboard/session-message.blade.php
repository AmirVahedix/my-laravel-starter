@if (session('message'))
    <div class="font-medium bg-blue-500 mt-3 mb-1 text-white px-3 py-2 rounded">
        <p>{{ session('message') }}</p>
    </div>
@endif
