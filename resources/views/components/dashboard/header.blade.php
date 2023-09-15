<div class="bg-white py-4 px-6 border-b-2 border-gray-300 flex justify-between items-center">
    <div class="flex items-center">
        <ion-icon
            name="menu-outline"
            class="text-3xl cursor-pointer ml-2 lg:hidden"
            x-on:click="mobile_sidebar = true"
        ></ion-icon>
        <h3 class="text-2xl">
            <a href="{{ route('index') }}" target="_blank">
                داشبورد کافه
            </a>
        </h3>
    </div>
    <div class="flex items-center">
{{--        <a href="{{ route('admin.profile') }}" class="flex">--}}
{{--            <ion-icon name="person-outline" class="text-3xl cursor-pointer ml-2 hover:text-blue-700 transition"></ion-icon>--}}
{{--        </a>--}}
        <a href="{{ route('logout') }}" class="flex">
            <ion-icon name="exit-outline" class="text-3xl cursor-pointer hover:text-blue-700 transition"></ion-icon>
        </a>
    </div>
</div>
