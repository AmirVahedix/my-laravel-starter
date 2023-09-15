@props([
'title',
'back',
'actionText',
'actionRoute',
'actionDelete' => false,
'noRoute' => false,
])

<div class="relative bg-white rounded-md shadow p-4 w-full lg:w-3/5 flex flex-col mt-4">
    @if(isset($title))
        @if(isset($actionText) && isset($actionRoute))
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    @if(isset($back))
                        <x-dashboard.back :route="$back"/>
                    @endif
                    <x-dashboard.title>{{ $title }}</x-dashboard.title>
                </div>
                @if($actionDelete)
                    <x-table.delete :route="$actionRoute">
                        {{ $actionText }}
                    </x-table.delete>
                @else
                    <a href="{{ $actionRoute }}" class="btn btn-sm">
                        {{ $actionText }}
                    </a>
                @endif
            </div>
        @else
            <div class="flex items-center">
                @if(isset($back))
                    <a href="{{ $noRoute ? $back : route($back) }}" class="flex" wire:ignore>
                        <ion-icon name="arrow-forward-outline" class="text-3xl ml-2"></ion-icon>
                    </a>
                @endif
                <x-dashboard.title>{{ $title }}</x-dashboard.title>
            </div>
        @endif
        <hr class="my-4">
    @endif

    {{ $slot }}
</div>
