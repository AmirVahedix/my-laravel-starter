<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <a href="{{ route('index') }}" class="mt-4">
        <x-application-logo class="w-20 h-20 fill-current text-gray-500 mb-2"/>
    </a>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="w-full sm:max-w-md bg-red-500 rounded-md p-2 text-white mt-4">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <div class="w-full sm:max-w-md mt-4 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg mb-5">
        <div class="flex justify-center">
            <h2 class="text-2xl font-bold">{{ $title ?? '' }}</h2>
        </div>

        @if($title)
            <hr class="my-4"> @endif
        {{ $slot }}
    </div>

    <a href="{{ route('index') }}" class="text-gray-700 hover:text-black hover:underline mb-6">
        &rarr; بازگشت به صفحه اصلی
    </a>
</div>
