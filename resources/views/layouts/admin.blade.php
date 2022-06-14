<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ขายพระ/ Admin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@400;600;700&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'IBM Plex Sans Thai', sans-serif;
            background-color: #f8f8f8;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/4f7015e517.js" crossorigin="anonymous"></script>
</head>

<body class="">
    <div class="flex h-screen antialiased w-full">

        <!-- Sidebar -->
        <aside class="flex-shrink-0 md:flex md:min-h-screen drop-shadow-[4px_4px_4px_rgba(0,0,0,0.25)] ">
            <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
                <div @click.away="open = false"
                    class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800"
                    x-data="{ open: false }">
                    <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
                        <a href="{{ route('dashboard') }}"
                            class="text-2xl text-black font-semibold tracking-widest rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                            <i class="fa-solid fa-yin-yang"></i> TopAmulet
                        </a>
                        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline"
                            @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="!open" fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path x-show="open" fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <nav :class="{ 'block': open, 'hidden': !open }"
                        class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                        <x-admin-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                            <i class="fa-solid fa-chart-line"></i>{{ __('ภาพรวมร้านค้า') }}
                        </x-admin-nav-link>
                        <x-admin-nav-link :href="route('admin.products.index')" :active="request()->routeIs('admin.products.index')">
                            <i class="fa-solid fa-bag-shopping"></i>{{ __('สินค้า') }}
                        </x-admin-nav-link>
                        <x-admin-nav-link :href="route('admin.products.index')" :active="request()->routeIs('admin.products.index')">
                            <i class="fa-solid fa-cubes-stacked"></i>{{ __('ประเภทสินค้า') }}
                        </x-admin-nav-link>
                        <x-admin-nav-link :href="route('admin.products.index')" :active="request()->routeIs('admin.products.index')">
                            <i class="fa-solid fa-receipt"></i>{{ __('รายการเช่าพระ') }}
                        </x-admin-nav-link>
                        <x-admin-nav-link :href="route('admin.products.index')" :active="request()->routeIs('admin.products.index')">
                            <i class="fa-solid fa-truck-fast"></i>{{ __('จัดส่ง') }}
                        </x-admin-nav-link>
                    </nav>
                </div>
            </div>
        </aside>

        <div class="flex w-full">
            <!-- Navbar -->
            <header class="relative z-[1] top-0 w-full drop-shadow-[4px_4px_4px_rgba(0,0,0,0.25)] ">
                <div class="flex items-center justify-between p-2 border-b bg-white">

                    <!-- Brand -->
                    <a href="#" class="inline-block text-2xl font-bold tracking-wider text-primary-dark">
                        <i class="fa-solid fa-xmark"></i> สวัสดี(นายขนมต้ม)
                    </a>

                    <!-- Desktop Right buttons -->
                    <nav aria-label="Secondary" class="hidden space-x-2 md:flex md:items-center">

                        <!-- View -->
                        <button
                            class="text-sm p-2 transition-colors duration-200 rounded-full text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 focus:ring-primary-darker">
                            <i class="fa-regular fa-eye"></i> หน้าร้าน
                        </button>

                        <!-- Search button -->
                        <div class="search_bar">
                            <form action="#" method="get">
                                <input type="text" name="search" placeholder="ค้นหา..." class=" rounded-[10px]">
                                <button type="submit"
                                    class="text-sm p-2 transition-colors duration-200 rounded-full text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 focus:ring-primary-darker">
                                    <i class="fa-solid fa-search"></i>
                                </button>
                            </form>
                        </div>

                        <!-- Notification button -->
                        <button
                            class="p-2 transition-colors duration-200 rounded-full text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker">
                            <i class="fa-regular fa-bell"></i>
                        </button>

                        <!-- User avatar button -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })"
                                type="button" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'"
                                class="transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100">
                                <span class="sr-only">User menu</span>
                                <img class="w-10 h-10 rounded-full"
                                    src="https://music.mthai.com/app/uploads/2018/11/pupe.jpg" />

                            </button>

                            <!-- User dropdown menu -->
                            <div x-show="open" x-ref="userMenu" x-transition:enter="transition-all transform ease-out"
                                x-transition:enter-start="translate-y-1/2 opacity-0"
                                x-transition:enter-end="translate-y-0 opacity-100"
                                x-transition:leave="transition-all transform ease-in"
                                x-transition:leave-start="translate-y-0 opacity-100"
                                x-transition:leave-end="translate-y-1/2 opacity-0" @click.away="open = false"
                                @keydown.escape="open = false"
                                class="absolute right-0 w-48 py-1 bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5"
                                tabindex="-1" role="menu" aria-orientation="vertical" aria-label="User menu">
                                <a href="#" role="menuitem"
                                    class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary">
                                    <i class="fa-solid fa-user-gear"></i> แก้ไขข้อมูลส่วนตัว
                                </a>
                                <a href="#" role="menuitem"
                                    class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary">
                                    <i class="fa-solid fa-shop"></i> แก้ไขข้อมูลร้านค้า
                                </a>
                                <a href="#" role="menuitem"
                                    class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary">
                                    <i class="fa-solid fa-building-columns"></i> แก้ไขข้อมูลธนาคาร
                                </a>
                                <hr>
                                <a href="#" role="menuitem"
                                    class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary">
                                    <i class="fa-solid fa-gear"></i> ตั้งค่าระบบ
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                        class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary">
                                        <i class="fa-solid fa-right-from-bracket"></i> {{ __('ออกจากระบบ') }}
                                    </a>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>

            <!-- Main content -->
            <main>
                <div class="absolute items-center top-16 left-[19.5%]">
                    {{ $slot }}
            </main>

        </div>
    </div>

</body>

</html>
