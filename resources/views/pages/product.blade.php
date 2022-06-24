@extends('layouts.app')

@section('content')
<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white dark:bg-slate-800">
    <div class="pt-6">
        {{-- beradcrumb --}}
        <nav aria-label="Breadcrumb">
            <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
                <li>
                    <div class="flex items-center">
                        <a href="#" class="mr-2 text-sm font-medium text-gray-900 dark:text-gray-300"> {{$product->gender}} </a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>

                <li>
                    <div class="flex items-center">
                        <a href="#" class="mr-2 text-sm font-medium text-gray-900 dark:text-gray-300"> {{$product->category->name}} </a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>

                <li class="text-sm">
                    <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600 dark:text-gray-100">
                        {{$product->name}} </a>
                </li>
            </ol>
        </nav>

        <!-- Image gallery -->
        <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div class="hidden aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block">
                @if ($product->thumbnail->thumbnail_2 == null)
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg"
                alt="Two each of gray, white, and black shirts laying flat."
                class="w-full h-full object-center object-cover">
                @else
                <img src="{{asset('storage/'. $product->thumbnail->thumbnail_2)}}"
                    alt="Two each of gray, white, and black shirts laying flat."
                    class="w-full h-full object-center object-cover">
                @endif
            </div>
            <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                @if ($product->thumbnail->thumbnail_3 == null)
                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                    <img src=""
                        alt="Model wearing plain black basic tee." class="w-full h-full object-center object-cover">
                </div>
                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                    <img src=""
                        alt="Model wearing plain black basic tee." class="w-full h-full object-center object-cover">
                </div>
                @else
                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                    <img src="{{asset('storage/'. $product->thumbnail->thumbnail_3)}}"
                        alt="Model wearing plain black basic tee." class="w-full h-full object-center object-cover">
                </div>
                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                    <img src="{{asset('storage/'. $product->thumbnail->thumbnail_4)}}"
                        alt="Model wearing plain black basic tee." class="w-full h-full object-center object-cover">
                </div>
                @endif
            </div>
            <div class="aspect-w-4 aspect-h-5 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
                @if ($product->thumbnail->thumbnail_1 == null)
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg"
                alt="Two each of gray, white, and black shirts laying flat."
                class="w-full h-full object-center object-cover">
                @else
                <img src="{{asset('storage/'. $product->thumbnail->thumbnail_1)}}"
                    alt="Two each of gray, white, and black shirts laying flat."
                    class="w-full h-full object-center object-cover">
                @endif
            </div>
        </div>

        <!-- Product info -->
        <div
            class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl dark:text-gray-100">{{$product->name}}</h1>
            </div>

            <!-- Options -> chose colors, size, and put the bag -->
            <livewire:product.product-info :product="$product" />


            <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <!-- Description and details -->
                <div>
                    <h3 class="sr-only">Description</h3>

                    <div class="space-y-6">
                        <p class="text-base text-gray-900 dark:text-gray-300">{!!$product->description!!}</p>
                    </div>
                </div>

                <div class="mt-10">
                    <h2 class="text-sm font-medium text-gray-900 dark:text-gray-300">Details</h2>

                    <div class="mt-4 space-y-6">
                        <p class="text-sm text-gray-600 dark:text-gray-300">{{$product->details}}.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comments and rating -->
        <div class="bg-white py-10 dark:bg-gray-800">
            <div class="md:grid md:grid-cols-3 md:gap-6 md:px-6 max-w-7xl mx-auto">
                <div class="md:col-span-1">
                    <!-- average rating -->
                    <livewire:product.average-rating :product="$product" />
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2 md:space-y-3">
                    <!-- part of comment  -->
                    <livewire:product.rating :product="$product" />
                </div>
            </div>
        </div>
    </div>
</div>

@endsection