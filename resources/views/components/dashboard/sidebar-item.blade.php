@props(['title', 'icon', 'link'])

<li class=
    "cursor-pointer rounded-md mb-3 transition-all px-4 py-3 cursor-pointer
    @if(request()->url() == route('dashboard'))
    {{ request()->url() == $link
        ? "bg-app-primary-light text-white"
        : "bg-white text-neutral-900 hover:text-app-primary" }}
    @else
    {{ str_starts_with(request()->url(), $link) && !in_array($link, [route('dashboard')])
        ? "bg-app-primary-light text-white"
        : "bg-white text-neutral-900 hover:text-app-primary" }}
    @endif
        "
>
    <a href="{{ $link }}" class="flex items-center">
        <ion-icon name="{{ $icon }}" class="text-2xl"></ion-icon>
        <h2 class="text-xl mr-3">{{ $title }}</h2>
    </a>
</li>
