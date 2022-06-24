<div x-data="{tabOpen : false}" class="navbar z-10 bg-white w-full">
    <!-- tampilan mobile -->
    <div x-show="tabOpen" :class="tabOpen ? true : false" class="fixed inset-0 flex z-20 lg:hidden">
        <!-- area luar sidebar berwarna abu-abu -->
        <div class="fixed inset-0 bg-black bg-opacity-25"></div>

        <!-- sidebar -->
        <div @click.away="tabOpen = !tabOpen"
            class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto dark:bg-slate-800">

            <!-- button close sidebar -->
            <div class="px-4 pt-5 pb-2 flex justify-between">
                <button @click="tabOpen = !tabOpen"
                    class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400 dark:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <div>
                    <label for="toogleA" class="flex items-center cursor-pointer">
                        <!-- toggle -->
                        <div class="relative">
                            <!-- input -->
                            <input x-model="darkMode" :value="!darkMode" id="toogleA" type="checkbox" class="sr-only" />
                            {{-- <input @change="darkMode = !darkMode" :value="darkMode" id="toogleA" type="checkbox"
                                class="sr-only" /> --}}
                            <!-- line -->
                            <div class="w-10 h-4 bg-gray-400 dark:bg-white rounded-full shadow-inner"></div>
                            <!-- dot -->
                            <div
                                class="absolute w-6 h-6 bg-white rounded-full shadow -left-1 -top-1 transition dark:translate-x-full dark:bg-indigo-600">
                            </div>
                        </div>
                        <!-- label -->
                        <div class="ml-3 text-gray-700 font-medium dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                            </svg>
                        </div>
                    </label>
                </div>
            </div>

            <!-- link -->
            <div x-data="{
                opentab: 1,
                active: 'text-indigo-600 border-indigo-600',
                inactive: 'text-gray-900 border-transparent'}" class="mt-2">
                <div class="border-b border-gray-200 dark:border-slate-900">
                    <div class="-mb-px flex px-4 space-x-8">
                        <button @click="opentab = 1" :class="opentab === 1 ? active : inactive"
                            class="flex-1 text-gray border-transparent whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium dark:text-gray-200">Women</button>
                        <button @click="opentab = 2" :class="opentab === 2 ? active : inactive"
                            class="flex-1 text-gray border-transparent whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium dark:text-gray-200">Men</button>
                    </div>
                </div>

                <!-- women tab panel -->
                <div x-show="opentab === 1" class="pt-10 pb-8 px-4 space-y-10">

                    <div class="grid grid-cols-2 gap-x-4">
                        <!-- pertama -->
                        <div class="group relative text-sm">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                    alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900 dark:text-gray-300">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1 dark:text-gray-200">Shop now</p>
                        </div>

                        <!-- kedua -->
                        <div class="group relative text-sm">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                    alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900 dark:text-gray-300">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1 dark:text-gray-200">Shop now</p>
                        </div>
                    </div>

                    <div>
                        <p class="font-semibold text-gray-900 dark:text-gray-400">Clothing</p>
                        <ul class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Tops </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Dresses
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Pants </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Denim </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Sweaters </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    T-Shirts </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Jackets </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Activewear </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Browse All </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p class="font-semibold text-gray-900 dark:text-gray-400">Accessories</p>
                        <ul role="list" aria-labelledby="women-accessories-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Watches </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Wallets </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Bags </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Sunglasses </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Hats </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Belts </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p class="font-semibold text-gray-900 dark:text-gray-400">Brands</p>
                        <ul role="list" aria-labelledby="women-brands-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Full Nelson </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    My Way </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Re-Arranged </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Counterfeit </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Significant Other </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- men tab panel -->
                <div x-show="opentab === 2" class="pt-10 pb-8 px-4 space-y-10">

                    <div class="grid grid-cols-2 gap-x-4">

                        <div class="group relative text-sm">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-05.jpg"
                                    alt="Drawstring top with elastic loop closure and textured interior padding."
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900 dark:text-gray-300">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1 dark:text-gray-200">Shop now</p>
                        </div>

                        <div class="group relative text-sm">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg"
                                    alt="Drawstring top with elastic loop closure and textured interior padding."
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900 dark:text-gray-300">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1 dark:text-gray-200">Shop now</p>
                        </div>
                    </div>

                    <div>
                        <p id="men-clothing-heading-mobile" class="font-medium text-gray-900 dark:text-gray-400">
                            Clothing</p>
                        <ul role="list" aria-labelledby="men-clothing-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Tops </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Pants </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Sweaters </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    T-Shirts </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Jackets </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Activewear </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Browse All </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p id="men-accessories-heading-mobile" class="font-medium text-gray-900 dark:text-gray-400">
                            Accessories</p>
                        <ul role="list" aria-labelledby="men-accessories-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Watches </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Wallets </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Bags </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Sunglasses </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Hats </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Belts </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p id="men-brands-heading-mobile" class="font-medium text-gray-900 dark:text-gray-400">Brands
                        </p>
                        <ul role="list" aria-labelledby="men-brands-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Re-Arranged </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Counterfeit </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    Full Nelson </a>
                            </li>

                            <li class="flow-root">
                                <a href="#"
                                    class="-m-2 p-2 block text-gray-500 dark:hover:text-indigo-400 dark:text-gray-200">
                                    My Way </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6 dark:border-slate-900">
                @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <a href="#" title="{{ auth()->user()->username }}"
                            class="flex items-center text-sm font-medium text-gray-700 hover:text-rose-800 w-full p-2 -m-2 dark:hover:text-indigo-400 dark:text-gray-200"
                            class="text-sm font-medium text-gray-700 hover:text-rose-800 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="h-6 w-px mx-3 bg-gray-200 dark:hover:text-indigo-400 dark:text-gray-200"
                                aria-hidden="true"></span>
                            {{ auth()->user()->username }}
                        </a>
                    </x-slot>

                    <!-- dropdown item -->
                    <x-dropdown-item href="/profile" :active="request()->is('/profile')">Profile
                    </x-dropdown-item>
                    <x-dropdown-item href="/voucher">Voucher</x-dropdown-item>
                    <x-dropdown-item href="/">Riwayat Pembelian</x-dropdown-item>
                    <x-dropdown-item href="/">Riwayat Pemesanan</x-dropdown-item>
                    <x-dropdown-item href="/">Wishlist</x-dropdown-item>
                    {{-- <x-dropdown-item href="#">Keluar</x-dropdown-item> --}}
                    <livewire:auth.logout />
                </x-dropdown>
                @else
                <button
                    class=" text-sm font-medium text-gray-700 hover:text-rose-800 w-full p-2 -m-2 dark:hover:text-indigo-400 dark:text-gray-200">
                    <a href="/login" title="login" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="h-6 w-px mx-3 bg-gray-200 dark:hover:text-indigo-400 dark:text-gray-200"
                            aria-hidden="true"></span>
                        Profile
                    </a>
                </button>
                @endauth

                <button
                    class="flex items-center text-sm font-medium text-gray-700 hover:text-rose-800 w-full p-2 -m-2 dark:hover:text-indigo-400 dark:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <span class="h-6 w-px mx-3 bg-gray-200 dark:hover:text-indigo-400 dark:text-gray-200"
                        aria-hidden="true"></span>
                    Wishlist
                </button>

                <button
                    class="flex items-center text-sm font-medium text-gray-700 hover:text-rose-800 w-full p-2 -m-2 dark:hover:text-indigo-400 dark:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="h-6 w-px mx-3 bg-gray-200 dark:hover:text-indigo-400 dark:text-gray-200"
                        aria-hidden="true"></span>
                    Keranjang
                </button>
            </div>
        </div>
    </div>


    <!-- tampilan dekstop -->
    <header class="relative bg-white dark:bg-gray-800 z-10">
        {{-- <div class="flex items-center justify-center bg-slate-800 h-10 dark:bg-indigo-600">
            <p class="text-sm font-medium text-white px-4 sm:px-6 lg:px-8">
                Get free delivery on orders over $100</p>
        </div> --}}
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="">
                <div class="h-16 flex items-center sm:justify-center">

                    <!-- menu tombol hamburger utk mobile -->
                    <button @click="tabOpen = !tabOpen" class="p-2 rounded-md text-gray-400 lg:hidden dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <!-- logo -->
                    <a href="/" type="button" class="ml-4 flex lg:ml-0 p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-rose-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </a>

                    <!-- Flyout menus -->
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch z-20">
                        <div x-data="{ 
                            tw: false,
                            tm: false,
                            ta: false,
                            tb: false,
                            active: 'border-rose-600 text-rose-600',
                            inactive: 'border-transparent text-gray-700 hover:text-gray-800'}"
                            class="h-full flex space-x-8">

                            <!-- women -->
                            <div class="flex " @click.away="tw = false">
                                <div class="relative flex">
                                    <button @click="tw = !tw" :class="tw ? active : inactive"
                                        class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px dark:text-white">Wanita</button>
                                </div>

                                <div x-show="tw" :class="tw ? true : false"
                                    class="absolute top-full inset-x-0 text-sm text-gray-500 dark:text-gray-200">
                                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>


                                    <div class="relative bg-white dark:bg-gray-800">
                                        <div class="max-7xl mx-auto px-8">
                                            <div class="grid grid-cols-2 gap-y-10 gap-x-8 py-16">

                                                <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                                    <div class="group relative text-base sm:text-sm">
                                                        <div
                                                            class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                                                alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                                                class="object-center object-cover">
                                                        </div>
                                                        <a href="#"
                                                            class="mt-6 block font-medium text-gray-900 dark:text-gray-300">
                                                            <span class="absolute z-10 inset-0"></span>
                                                            New Arrivals
                                                        </a>
                                                        <p aria-hidden="true" class="mt-1 dark:text-gray-200">Shop now
                                                        </p>
                                                    </div>

                                                    <div class="group relative text-base sm:text-sm">
                                                        <div
                                                            class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                                                alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                                                class="object-center object-cover">
                                                        </div>
                                                        <a href="#"
                                                            class="mt-6 block font-medium text-gray-900 dark:text-gray-300">
                                                            <span class="absolute z-10 inset-0"
                                                                aria-hidden="true"></span>
                                                            Basic Tees
                                                        </a>
                                                        <p aria-hidden="true" class="mt-1 dark:text-gray-200">Shop now
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row-start-1 grid grid-cols-3 gap-y-10 gap-x-8 text-sm">
                                                    <div>
                                                        <p id="Clothing-heading"
                                                            class="font-medium text-gray-900 dark:text-gray-400">
                                                            Clothing</p>
                                                        <ul role="list" aria-labelledby="Clothing-heading"
                                                            class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Tops </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Dresses </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Pants </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Denim </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Sweaters </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    T-Shirts </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Jackets </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Activewear </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Browse All </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <p id="Accessories-heading"
                                                            class="font-medium text-gray-900 dark:text-gray-400">
                                                            Accessories</p>
                                                        <ul role="list" aria-labelledby="Accessories-heading"
                                                            class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Watches </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Wallets </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Bags </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Sunglasses </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Hats </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Belts </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <p id="Brands-heading"
                                                            class="font-medium text-gray-900 dark:text-gray-400">Brands
                                                        </p>
                                                        <ul role="list" aria-labelledby="Brands-heading"
                                                            class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Full Nelson
                                                                </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    My Way </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Re-Arranged
                                                                </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Counterfeit
                                                                </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Significant
                                                                    Other </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Men -->
                            <div class="flex" @click.away="tm = false">
                                <div class="relative flex">
                                    <button @click="tm = !tm" :class="tm ? active : inactive"
                                        class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px dark:text-white">Pria</button>
                                </div>

                                <div x-show="tm" :class="tm ? true : false"
                                    class="absolute top-full inset-x-0 text-sm text-gray-500 dark:text-gray-200">
                                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                    <div class="relative bg-white dark:bg-gray-800">
                                        <div class="max-7xl mx-auto px-8">
                                            <div class="grid grid-cols-2 gap-y-8 gap-x-10 py-16">
                                                <div class="col-start-2 grid grid-cols-2 gap-x-8">
                                                    <div class="group relative text-base sm:text-sm">
                                                        <div
                                                            class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                            <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-05.jpg"
                                                                alt="Drawstring top with elastic loop closure and textured interior padding."
                                                                class="object-center object-cover">
                                                        </div>
                                                        <a href="#"
                                                            class="mt-6 block font-medium text-gray-900 dark:text-gray-300">
                                                            <span class="absolute z-10 inset-0"
                                                                aria-hidden="true"></span>
                                                            New Arrivals
                                                        </a>
                                                        <p aria-hidden="true" class="mt-1 dark:text-gray-200">Shop now
                                                        </p>
                                                    </div>

                                                    <div class="group relative text-base sm:text-sm">
                                                        <div
                                                            class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                            <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg"
                                                                alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt."
                                                                class="object-center object-cover">
                                                        </div>
                                                        <a href="#"
                                                            class="mt-6 block font-medium text-gray-900 dark:text-gray-300">
                                                            <span class="absolute z-10 inset-0"
                                                                aria-hidden="true"></span>
                                                            Artwork Tees
                                                        </a>
                                                        <p aria-hidden="true" class="mt-1 dark:text-gray-200">Shop now
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row-start-1 grid grid-cols-3 gap-y-10 gap-x-3 text-sm">

                                                    <div>
                                                        <p id="Clothing-heading"
                                                            class="font-medium text-gray-900 dark:text-gray-400">
                                                            Clothing</p>
                                                        <ul role="list" aria-labelledby="Clothing-heading"
                                                            class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Tops </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Pants </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Sweaters </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    T-Shirts </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Jackets </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Activewear </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Browse All </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <p id="Accessories-heading"
                                                            class="font-medium text-gray-900 dark:text-gray-400">
                                                            Accessories</p>
                                                        <ul role="list" aria-labelledby="Accessories-heading"
                                                            class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Watches </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Wallets </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Bags </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Sunglasses </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Hats </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Belts </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <p id="Brands-heading"
                                                            class="font-medium text-gray-900 dark:text-gray-400">Brands
                                                        </p>
                                                        <ul role="list" aria-labelledby="Brands-heading"
                                                            class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Re-Arranged
                                                                </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Counterfeit
                                                                </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    Full Nelson
                                                                </a>
                                                            </li>

                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-indigo-400">
                                                                    My Way </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Anak -->
                            <div class="flex" @click.away="ta = false">
                                <div class="relative flex">
                                    <button @click="ta = !ta" :class="ta ? active : inactive"
                                        class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px dark:text-white">Anak</button>
                                </div>

                                <div x-show="ta" :class="ta ? true : false"
                                    class="absolute top-full inset-x-0 text-sm text-gray-500">
                                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>


                                    <div class="relative bg-white">
                                        <div class="max-7xl mx-auto px-8">
                                            <div class="py-16">
                                                <span>Cooming Soon</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bayi -->
                            <div class="flex" @click.away="tb = false">
                                <div class="relative flex">
                                    <button @click="tb = !tb" :class="tb ? active : inactive"
                                        class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px dark:text-white">Bayi</button>
                                </div>

                                <div x-show="tb" :class="tb ? true : false"
                                    class="absolute top-full inset-x-0 text-sm text-gray-500">
                                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>


                                    <div class="relative bg-white">
                                        <div class="max-7xl mx-auto px-8">
                                            <div class="py-16">
                                                <span>Cooming Soon</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- menu sebelah kanan -->
                    <div class="ml-auto flex items-center z-20">
                        <div class="input hidden md:flex mx-8 shadow-md rounded-full">
                            <input type="text" size="50" placeholder="Cari Produk Anda di Sini"
                                class="py-2 lg:py-0 pl-4 w-full focus-within:outline-none border rounded-full h-9 text-xs">
                            <button type="submit"
                                class="transition-colors duration-300 bg-rose-500 hover:bg-rose-600 lg:mt-0 rounded-full text-xs font-semibold text-white uppercase  px-5 -ml-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                            <!-- icon user -->
                            @auth
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <a title="{{ auth()->user()->username }}"
                                        class="text-sm font-medium text-gray-700 hover:text-rose-800 dark:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </a>
                                </x-slot>

                                <!-- dropdown item -->
                                <x-dropdown-item href="/profile/{{auth()->user()->id}}"
                                    :active="request()->is('/profile')">Profile
                                </x-dropdown-item>
                                @if (auth()->user()->username == 'MrSaan')
                                <x-dropdown-item href="/admin/product">Administrator</x-dropdown-item>
                                @endif
                                <x-dropdown-item href="/voucher">Voucher</x-dropdown-item>
                                <x-dropdown-item href="/">Riwayat Pembelian</x-dropdown-item>
                                <x-dropdown-item href="/">Wishlist</x-dropdown-item>
                                {{-- <x-dropdown-item href="#">Keluar</x-dropdown-item> --}}
                                <livewire:auth.logout />
                            </x-dropdown>
                            @else
                            <a href="/login" title="login"
                                class="text-sm font-medium text-gray-700 hover:text-rose-800 dark:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </a>
                            @endauth

                            <!-- icon love -->
                            <a href="#" title="wishlist"
                                class="text-sm font-medium text-gray-700 hover:text-rose-800 dark:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </a>

                            <!-- icon keranjang -->
                            <livewire:product.bag />

                            <!-- toggle dark mode -->
                            <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                            <div class="flex items-center justify-center w-full">

                                <label for="toogleA" class="flex items-center cursor-pointer">
                                    <!-- toggle -->
                                    <div class="relative">
                                        <!-- input -->
                                        <input x-model="darkMode" :value="!darkMode" id="toogleA" type="checkbox"
                                            class="sr-only" />
                                        {{-- <input @change="darkMode = !darkMode" :value="darkMode" id="toogleA"
                                            type="checkbox" class="sr-only" /> --}}
                                        <!-- line -->
                                        <div class="w-10 h-4 bg-gray-400 dark:bg-white rounded-full shadow-inner"></div>
                                        <!-- dot -->
                                        <div
                                            class="absolute w-6 h-6 bg-white rounded-full shadow -left-1 -top-1 transition dark:translate-x-full dark:bg-indigo-600">
                                        </div>
                                    </div>
                                    <!-- label -->
                                    <div class="ml-3 text-gray-700 font-medium dark:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                        </svg>
                                    </div>
                                </label>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>
</div>