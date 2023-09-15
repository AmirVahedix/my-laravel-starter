@if ($errors->any())
    <div>
        <ul class="mt-3 text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li class="bg-red-600 rounded px-4 py-3 text-white mb-2">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
