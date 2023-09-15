@props([
    'route'
])

<form action="{{ $route }}" method="POST">
    @csrf
    @method('DELETE')

    <button class="btn-sm mr-2 bg-red-500 hover:bg-red-600">حذف</button>
</form>
