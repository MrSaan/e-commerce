@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row">
    <x-profile.sidebar-admin />
    <div x-data="{ tab: 'category'}" class="bg-gray-100 w-full py-10">

        <div class="flex mx-auto w-full px-10">
            <button @click.prevent="tab = 'category'"
                :class="{ 'border border-b-0 border-gray-300 rounded-t-md bg-white' : tab === 'category'}"
                class="flex w-full items-center h-12 px-2 py-2 text-center text-gray-700 border-b border-gray-300 sm:px-4 dark:border-gray-500 -px-1 dark:text-white whitespace-nowrap focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                </svg>

                <span class="mx-1 text-sm sm:text-base">
                    Categories List
                </span>
            </button>


            <button @click.prevent="tab= 'add'"
                :class="{ 'border border-b-0 border-gray-300 rounded-t-md bg-white' : tab === 'add'}"
                class="flex w-full items-center h-12 px-2 py-2 text-center text-gray-700 border-b border-gray-300 sm:px-4 dark:border-gray-500 -px-1 dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400 dark:hover:border-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>

                <span class="mx-1 text-sm sm:text-base">
                    Add Product
                </span>
            </button>

        </div>

        <div x-show="tab === 'category'" class="w-auto bg-white mx-10 py-6">
            <livewire:admin.category-list />
        </div>
        <div x-show="tab === 'add'" class="w-auto bg-white mx-10 py-6">
            <livewire:admin.category-add />
        </div>
    </div>
</div>

@endsection