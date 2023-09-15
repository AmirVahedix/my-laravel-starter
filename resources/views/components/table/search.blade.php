<div x-show="search">
    <form
        class="flex w-full lg:w-2/5 mt-3"
        wire:submit.prevent="search"
    >
        <x-input class="ml-2" placeholder="جستجو..." wire:model.lazy="searchText" style="margin-top: 0" rtl/>
        <x-button>جستجو</x-button>
    </form>
    @if($doSearch)
        <div class="flex items-center mt-4">
            <span>نتایج جستجو برای "{{ $searchText }}"</span>
            <button
                wire:click="clearSearch"
                class="mr-3 text-red-500 hover:underline hover:text-red-600 focus:text-red-700"
            >
                حذف
            </button>
        </div>
    @endif
</div>
