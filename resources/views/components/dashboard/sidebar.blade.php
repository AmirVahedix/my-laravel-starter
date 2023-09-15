@php use Modules\Authorization\Models\Permission; @endphp
<div>
    <div
        class="absolute w-full h-screen bg-black opacity-50 z-10 lg:hidden"
        x-show="mobile_sidebar"
        x-on:click="mobile_sidebar = false"
        x-cloak
    ></div>
    <nav
        class="absolute overflow-y-auto lg:fixed top-0 z-20 transition h-screen w-80 bg-white border-l-2 border-l-gray-300 flex flex-col px-4 pt-8"
        :class="mobile_sidebar ? 'right-0' : 'transform translate-x-80 lg:translate-x-0'"
        x-cloak
    >
        <div class="w-full mx-auto flex py-6 justify-center">
            <a href="{{ route('index') }}">
                <img src="{{ asset('images/logo.png') }}" alt="" class="w-56"/>
            </a>
        </div>
        <ul class="flex flex-col w-full mx-auto mt-8">
            <x-dashboard.sidebar-item
                title="داشبورد"
                link="{{ route('dashboard') }}"
                icon="home-outline"
            />
            <x-dashboard.sidebar-item
                title="منو"
                link="{{ route('admin.categories.index') }}"
                icon="reader-outline"
            />
            <x-dashboard.sidebar-item
                title="سفارشات"
                link="{{ route('admin.orders.index') }}"
                icon="receipt-outline"
            />
            {{--            @can(Permission::MANAGE_PRODUCTS)--}}
            {{--                <x-dashboard.sidebar-item--}}
            {{--                    title="محصولات"--}}
            {{--                    link="{{ route('admin.products.index') }}"--}}
            {{--                    icon="cart-outline"--}}
            {{--                />--}}
            {{--            @endcan--}}
            {{--            @can(Permission::MANAGE_CERTIFICATES)--}}
            {{--                <x-dashboard.sidebar-item--}}
            {{--                    title="پادکست ها"--}}
            {{--                    link="{{ route('admin.podcasts.index') }}"--}}
            {{--                    icon="mic-outline"--}}
            {{--                />--}}
            {{--            @endcan--}}

            {{--            @can(Permission::MANAGE_CERTIFICATES)--}}
            {{--                <x-dashboard.sidebar-item--}}
            {{--                    title="آزمون ها"--}}
            {{--                    link="{{ route('admin.quizzes.index') }}"--}}
            {{--                    icon="flask-outline"--}}
            {{--                />--}}
            {{--            @endcan--}}
            {{--            @can(Permission::MANAGE_CERTIFICATES)--}}
            {{--                <x-dashboard.sidebar-item--}}
            {{--                    title="گواهی ها"--}}
            {{--                    link="{{ route('admin.certificates.index') }}"--}}
            {{--                    icon="shield-checkmark-outline"--}}
            {{--                />--}}
            {{--            @endcan--}}

            {{--            @can(Permission::MANAGE_PURCHASES)--}}
            {{--                <x-dashboard.sidebar-item--}}
            {{--                    title="گزارش خرید"--}}
            {{--                    link="{{ route('admin.products.purchases.index') }}"--}}
            {{--                    icon="bag-handle-outline"--}}
            {{--                />--}}
            {{--            @endcan--}}
            {{--            @can(Permission::MANAGE_PAYMENTS)--}}
            {{--                <x-dashboard.sidebar-item--}}
            {{--                    title="مدیریت مالی"--}}
            {{--                    link="{{ route('admin.payments.index') }}"--}}
            {{--                    icon="cash-outline"--}}
            {{--                />--}}
            {{--            @endcan--}}
            {{--            @can(Permission::MANAGE_COMMENTS)--}}
            {{--                <x-dashboard.sidebar-item--}}
            {{--                    title="نظرات"--}}
            {{--                    link="{{ route('admin.comments.index') }}"--}}
            {{--                    icon="chatbox-ellipses-outline"--}}
            {{--                />--}}
            {{--            @endcan--}}
            {{--            @can(Permission::MANAGE_PRODUCTS)--}}
            {{--                <x-dashboard.sidebar-item--}}
            {{--                    title="دسته بندی ها"--}}
            {{--                    link="{{ route('admin.categories.index') }}"--}}
            {{--                    icon="apps-outline"--}}
            {{--                />--}}
            {{--            @endcan--}}
            {{--            @can(Permission::MANAGE_MEMBERSHIP)--}}
            {{--                <x-dashboard.sidebar-item--}}
            {{--                    title="درخواست‌های عضویت"--}}
            {{--                    link="{{ route('admin.memberships.index') }}"--}}
            {{--                    icon="person-add-outline"--}}
            {{--                />--}}
            {{--            @endcan--}}
            {{--            <x-dashboard.sidebar-item--}}
            {{--                title="سطوح کاربری"--}}
            {{--                link="{{ route('admin.authorization.index') }}"--}}
            {{--                icon="ribbon-outline"--}}
            {{--            />--}}
            {{--            @can(Permission::SUPER_ADMIN)--}}
            {{--                <x-dashboard.sidebar-item--}}
            {{--                    title="مدیران"--}}
            {{--                    link="{{ route('admin.admins.index') }}"--}}
            {{--                    icon="code-slash-outline"--}}
            {{--                />--}}
            {{--            @endcan--}}
            {{--            @can(Permission::MANAGE_USERS)--}}
            {{--                <x-dashboard.sidebar-item--}}
            {{--                    title="کاربران"--}}
            {{--                    link="{{ route('admin.users.index') }}"--}}
            {{--                    icon="person-outline"--}}
            {{--                />--}}
            {{--            @endcan--}}
            {{--            <x-dashboard.sidebar-item--}}
            {{--                title="تنظیمات"--}}
            {{--                link="{{ route('admin.settings.index') }}"--}}
            {{--                icon="settings-outline"--}}
            {{--            />--}}
            <x-dashboard.sidebar-item
                title="خروج"
                link="{{ route('logout') }}"
                icon="exit-outline"
            />
        </ul>
    </nav>
</div>
