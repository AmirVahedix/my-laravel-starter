<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')
    {{ $styles ?? '' }}

    @vite('resources/js/dashboard.js')
</head>
<body style="direction: rtl; overflow-x: hidden" class="bg-gray-100">
<div
    class="lg:flex w-full h-screen relative"
    x-data="{ mobile_sidebar: false }"
>
    <x-dashboard.sidebar />
    <div class="bg-gray-100 w-full relative lg:pr-80">
        <x-dashboard.header />
        <div class="flex flex-col px-6">
            <x-dashboard.session-message />
            <x-dashboard.validation-errors />
        </div>
        <div class="px-2 py-2 lg:py-5 lg:px-6 bg-gray-100">
            {{ $slot }}
        </div>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

{{ $scripts ?? '' }}

</body>
</html>
