@props([
'showSearch' => false,
'actionText',
'actionRoute',
'actionText2',
'actionRoute2',
'noRoute' => false,
'noRoute2' => false,
])

<div class="flex flex-col lg:flex-row justify-between px-2 pt-4 lg:p-0 items-start">
    <div class="flex">
        <x-dashboard.title>{{ $slot }}</x-dashboard.title>
        @if($showSearch)
            <ion-icon name="search" @click="search = !search" wire:ignore class="cursor-pointer text-3xl mr-3"/>
        @endif
    </div>
    <div>
        @if(isset($actionText2, $actionRoute2))
            <a href="{{ $noRoute2 ? $actionRoute2 : route($actionRoute2) }}" class="btn bg-yellow-400 hover:bg-yellow-500 mt-4 lg:mt-0">
                {{ $actionText2 }}
            </a>
        @endif
        @if(isset($actionText, $actionRoute))
            <a href="{{ $noRoute ? $actionRoute : route($actionRoute) }}" class="btn mt-4 lg:mt-0">
                {{ $actionText }}
            </a>
        @endif
    </div>
</div>
