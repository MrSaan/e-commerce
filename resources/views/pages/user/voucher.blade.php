@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row">
    <x-profile.sidebar />
    <div class="bg-gray-300 w-full pt-6 flex flex-col">

        <div class="flex w-full max-w-sm mx-4 mb-6 overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-center w-12 bg-blue-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-blue-500 dark:text-blue-400">Info</span>
                    <p class="text-sm text-gray-600 dark:text-gray-200">You have code to use:</p>
                </div>
            </div>
        </div>

        @foreach ($voucher as $item)
        <div
            class="flex mb-4 items-center justify-between max-w-2xl w-full bg-white px-8 py-4 mx-auto border cursor-pointer rounded-xl dark:border-gray-700">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 sm:h-9 sm:w-9" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>

                <div class="flex flex-col items-center mx-5 space-y-1">
                    <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">{{$item->code}}</h2>
                    <div class="px-2 text-xs text-blue-500 bg-gray-100 rounded-full sm:px-4 sm:py-1 dark:bg-gray-700 ">
                        Discount
                    </div>
                </div>
            </div>

            @if ($item->percent_off != null)
            <h2 class="text-3xl font-semibold text-blue-600">{{$item->percent_off}}%</h2>
            @else
            <h2 class="text-3xl font-semibold text-blue-600">${{$item->value}}</h2>
            @endif
        </div>
        @endforeach
    </div>
</div>

@endsection