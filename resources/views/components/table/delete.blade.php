<form action="{{ $route }}" method="POST" class="ml-2">
    @csrf
    @method('DELETE')

    <button
        class="inline-flex items-center px-2 py-1 text-sm bg-red-500 hover:bg-red-600 border border-transparent rounded-md font-medium text-white hover:bg-blue-700 disabled:opacity-25 transition ease-in-out duration-150"
    >
        {{ $text ?? "حذف" }}
    </button>
</form>
