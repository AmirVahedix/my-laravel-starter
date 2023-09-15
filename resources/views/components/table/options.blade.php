<div x-data="{ show : false }">
    <button
        class="btn-sm bg-white border-2 border-gray-500 text-gray-500 bg-gray-100 hover:bg-gray-200"
        x-on:click="show = !show"
    >
        <span>گزینه ها</span>
        <ion-icon name="chevron-down-outline" class="mr-1" wire:ignore></ion-icon>
    </button>
    <div
        x-show="show"
        class="absolute left-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
        @click.outside="show = false"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
    >
        <div class="py-1" role="none">
            {{ $slot }}
        </div>
    </div>
</div>
