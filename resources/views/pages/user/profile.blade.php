@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row">
    <x-profile.sidebar />
    <div class="bg-gray-100 w-full">
        <div class="bg-gray-100 py-10 dark:bg-gray-800">
            <div class="flex flex-col max-w-6xl mx-auto">
                <div class="flex items-start mb-10">
                    {{-- <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful
                            what you
                            share.</p>
                    </div> --}}

                    <div
                        class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <div class="flex items-center justify-center w-20 bg-blue-500">
                            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                            </svg>
                        </div>

                        <div class="px-4 py-2 -mx-3">
                            <div class="mx-3">
                                <span class="font-semibold text-blue-500 dark:text-blue-400">Profile</span>
                                <p class="text-sm text-gray-600 dark:text-gray-200">This information will be displayed
                                    publicly so be careful
                                    what you
                                    share.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-10">
                    <livewire:user.profile :user="$user" />
                </div>
            </div>
        </div>
    </div>
</div>

@endsection