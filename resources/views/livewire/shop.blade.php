<div class="mt-6 lg:mt-0 lg:px-2 lg:w-4/5 ">
    <div class="flex flex-col gap-4 md:gap-0 md:flex-row items-center md:justify-between text-sm tracking-widest ">
        <p class="text-slate-800 text-4xl font-bold tracking-tight dark:text-gray-300">Shop</p>
        <div x-data="{ price : false, sort : false}" @click.away="price = false, sort = false"
            class="flex space-x-4 relative">

            <button @click="price = !price" class="px-8 py-2 border border-gray-400 rounded-lg transition-colors duration-200 hover:text-white
                    transform hover:bg-rose-600 focus:outline-none focus:bg-rose-600 focus:ring focus:ring-rose-400
                    focus:ring-opacity-50 dark:bg-slate-900 dark:border-none dark:text-gray-300">Price</button>
           
            <!-- open panel "price" -->
            <x-panel x-show="price"
                class="absolute z-30 flex flex-col items-start top-14 -left-5 bg-white w-full dark:bg-slate-900 dark:border-none">
                <p class="text-base text-slate-800 dark:text-gray-300"><span class="font-semibold">Price</span>
                    range</p>
                <span class="text-xs text-slate-800 font-medium pt-6 dark:text-gray-300">
                    Use slider or enter min and max price
                </span>
                <span class="text-xs text-slate-600 dark:text-gray-300">
                    Maximum price ${{$products->max('price')}}
                </span>

                <div class="pt-2 pb-6">
                    <input type="text" placeholder="${{$products->min('price')}}" size="1"
                        class="px-3 py-1 bg-gray-200 rounded-lg">
                    <span>-</span>
                    <input type="text" placeholder="${{$products->max('price')}}" size="1"
                        class="px-3 py-1 bg-gray-200 rounded-lg">
                </div>

                <!-- range input -->
                <div class="relative w-full range-input">
                    <input type="range" class="w-full py-4 absolute pointer-events-auto bg-opacity-0 -top-[5px] h-1"
                        value="10" min="{{$products->min('price')}}" max="{{$products->max('price')}}" step="1">
                    <input type="range" class="w-full py-4 absolute pointer-events-auto bg-opacity-0 -top-[5px] h-1"
                        value="50" min="{{$products->min('price')}}" max="{{$products->max('price')}}" step="1">
                </div>

                <x-button class="w-full hidden">Apply filter</x-button>
            </x-panel>
            <!-- end panel "price" -->

            <button @click="sort = !sort" class="px-8 py-2 border border-gray-400 rounded-lg transition-colors duration-200 hover:text-white
                    transform hover:bg-rose-600 focus:outline-none focus:bg-rose-600 focus:ring focus:ring-rose-400
                    focus:ring-opacity-50 dark:bg-slate-900 dark:border-none dark:text-gray-300">Sort by</button>
            
            <!-- open panel "sort" -->
            <x-panel x-show="sort"
                class="absolute flex flex-col space-y-4 top-14 right-0 bg-white dark:bg-slate-900 dark:border-none">
                <span wire:click="$set('search', 'female')" type="search" class="hover:text-rose-600 dark:text-gray-300 dark:hover:text-rose-600 cursor-pointer">Women</a></span>
                <span wire:click="$set('search', 'male')" type="search" class="hover:text-rose-600 dark:text-gray-300 dark:hover:text-rose-600 cursor-pointer">Men</a></span>
            </x-panel>
            <!-- end panel "sort" -->
            
        </div>
    </div>

    <!-- categori section view -->
    <div class="flex flex-row gap-4 justify-start py-6">
        @if ($search == 'female')
        <div class="flex gap-2 items-center px-4 py-2 bg-gray-100 rounded-md dark:bg-slate-900">
            <span class="text-gray-600 dark:text-gray-300">Women</span>
            <span class="text-rose-600">
                <a wire:click="$set('search', '')" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </span>
        </div>
        @elseif ($search == 'male')
        <div class="flex gap-2 items-center px-4 py-2 bg-gray-100 rounded-md dark:bg-slate-900">
            <span class="text-gray-600 dark:text-gray-300">Men</span>
            <span class="text-rose-600">
                <a wire:click="$set('search', '')" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </span>
        </div>
        @endif

        @if ($type != null)
        <div class="flex gap-2 items-center px-4 py-2 bg-gray-100 rounded-md dark:bg-slate-900">
            <span class="text-gray-600 dark:text-gray-300">{{$tipe->name}}</span>
            <span class="text-rose-600">
                <a wire:click="$set('type', '')" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </span>
        </div>
        @endif
    </div>
    <!-- end categori section view -->

    <div class="grid grid-cols-1 gap-8 mt-8 items-start md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($products as $product)
        <div x-data="{ modal{{$product->id}}: false }" class="group relative dark:hover:bg-gray-700 p-2 rounded-md">
            <div
                class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                <img src="{{asset('storage/'.$product->thumbnail->thumbnail_2)}}"
                    alt="Front of men&#039;s Basic Tee in black."
                    class="w-full h-full object-center object-cover lg:w-full lg:h-full">
            </div>
            <button @click="modal{{$product->id}}=true" wire:click="$set('productId', {{$product->id}})"
                class="absolute z-20 px-2 py-1 rounded-lg border border-gray-400 top-0 right-0 mt-4 mr-4 hover:bg-rose-600 hover:text-white hover:border-white"
                title="Add To Cart">
                <a href="#">+</a>
            </button>
            <div class="flex flex-row justify-between w-full pt-4">
                <div>
                    <span class="text-xs text-gray-600 capitalize dark:text-gray-300">{{$product->gender}} |</span>
                    <span class="text-xs text-gray-600 capitalize dark:text-gray-300">{{$product->category->name}}</span>
                </div>
                <span class="text-xs text-gray-600 flex gap-1 dark:text-gray-300">{!! $product->size !!}</span>
            </div>
            <div class="mt-4 flex flex-col gap-y-2">
                <div>
                    <h3 class="text-sm text-gray-700 dark:text-gray-300">
                        <a href="/shop/{{ $product->id }}">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            {{ $product->name }}
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">{{ $product->slug }}</p>
                </div>
                <div>
                    <p class="text-xl font-semibold text-gray-900 dark:text-white">{{ $product->presentPrice() }}</p>
                </div>
            </div>

            <!-- modal product view -->
            <div x-show="modal{{$product->id}}" class="relative z-50" role="dialog" aria-modal="true">
                <x-flash />

                <div x-show="modal{{$product->id}}" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity md:block z-50"></div>

                <div class="fixed z-50 inset-0 overflow-y-auto">
                    <div class="flex min-h-screen text-center md:block md:px-2 lg:px-4" style="font-size: 0">
                        <!-- This element is to trick the browser into centering the modal contents. -->
                        <span class="hidden md:inline-block md:align-middle md:h-screen"
                            aria-hidden="true">&#8203;</span>

                        <div x-show="modal{{$product->id}}" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 md:scale-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0 md:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
                            class="flex text-base text-left transform transition w-full md:inline-block md:max-w-2xl md:px-4 md:my-8 md:align-middle lg:max-w-4xl">
                            <div
                                class="w-full relative flex items-center bg-white px-4 pt-14 pb-8 overflow-hidden shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                                <button type="button" @click="modal{{$product->id}} = false"
                                    class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
                                    <span class="sr-only">Close</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>

                                <div
                                    class="w-full grid grid-cols-1 gap-y-8 gap-x-6 items-start sm:grid-cols-12 lg:gap-x-8">
                                    <div
                                        class="aspect-w-2 aspect-h-3 rounded-lg bg-gray-100 overflow-hidden sm:col-span-4 lg:col-span-5">
                                        <img src="{{asset('storage/'.$product->thumbnail->thumbnail_2)}}"
                                            alt="Two each of gray, white, and black shirts arranged on table."
                                            class="object-center object-cover">
                                    </div>
                                    <div class="sm:col-span-8 lg:col-span-7">
                                        <h2 class="text-2xl font-extrabold text-gray-900 sm:pr-12">{{$product->name}}
                                        </h2>

                                        <section aria-labelledby="information-heading" class="mt-2">
                                            <h3 id="information-heading" class="sr-only">Product information</h3>

                                            <p class="text-2xl text-gray-900">{{$product->presentPrice()}}</p>

                                            <!-- Reviews -->
                                            <div class="mt-6">
                                                <h4 class="sr-only">Reviews</h4>
                                                <div class="flex items-center">
                                                    <div class="flex items-center">
                                                        <svg wire:model="rating"
                                                            class=" @if ($rating >= 1) text-yellow-400 @endif h-5 w-5 flex-shrink-0"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                        </svg>

                                                        <!-- Heroicon name: solid/star -->
                                                        <svg wire:model="rating"
                                                            class=" @if ($rating >= 2) text-yellow-400 @endif h-5 w-5 flex-shrink-0"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                        </svg>

                                                        <!-- Heroicon name: solid/star -->
                                                        <svg wire:model="rating"
                                                            class=" @if ($rating >= 3) text-yellow-400 @endif h-5 w-5 flex-shrink-0"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                        </svg>

                                                        <!-- Heroicon name: solid/star -->
                                                        <svg wire:model="rating"
                                                            class=" @if ($rating >= 4) text-yellow-400 @endif h-5 w-5 flex-shrink-0"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                        </svg>

                                                        <!-- Heroicon name: solid/star -->
                                                        <svg wire:model="rating"
                                                            class=" @if ($rating >= 5) text-yellow-400 @endif h-5 w-5 flex-shrink-0"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                        </svg>
                                                    </div>
                                                    <p class="sr-only">3.9 out of 5 stars</p>
                                                    <span
                                                        class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500"
                                                        wire:model="count">{{ $count }}
                                                        reviews</span>
                                                </div>
                                            </div>
                                        </section>

                                        <section aria-labelledby="options-heading" class="mt-10">
                                            <h3 id="options-heading" class="sr-only">Product options</h3>

                                            <form wire:submit.prevent="save">
                                                <!-- qty -->
                                                <div
                                                    class="text-base text-gray-400 flex flex-row items-center justify-start w-auto pb-6">
                                                    <div class="flex flex-col gap-2 text-gray-800">
                                                        <label for="qty">Qty</label>
                                                        <input type="number" name="qty" min="1" wire:model="buy"
                                                            placeholder="1"
                                                            class="w-16 border border-gray-200 p-1 rounded text-gray-700 placeholder-gray-400 bg-white dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                                                    </div>
                                                    @if ($buy <= $product->qty) <span
                                                            class="pt-6 px-4 text-xs md:text-base">✔ In
                                                            stock and ready to ship</span>
                                                        @else
                                                        <span class="pt-6 px-4 text-xs md:text-base">❌ Out of
                                                            stock</span>
                                                        @endif
                                                </div>
                                                @error('buy')
                                                <p class="text-red-500 text-ms">{{ $message }}</p>
                                                @enderror

                                                <!-- Colors -->
                                                <div>
                                                    <h3 class="text-sm text-gray-900 font-medium">Color</h3>

                                                    <fieldset class="mt-4">
                                                        <legend class="sr-only">Choose a color</legend>
                                                        <div class="flex items-center space-x-3">
                                                            @php
                                                            $colors = explode(',', $product->colors);
                                                            @endphp
                                                            @foreach ($colors as $color)
                                                            <label wire:click="$set('colorActive', '{{ $color }}')"
                                                                @if($colorActive==$color)
                                                                class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400 ring ring-offset-1"
                                                                @else
                                                                class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400"
                                                                @endif>
                                                                <input type="radio" name="color-choice"
                                                                    value="{{$color}}" class="sr-only"
                                                                    aria-labelledby="color-choice-0-label"
                                                                    wire:model="color">
                                                                <p id="color-choice-0-label" class="sr-only">{{$color}}
                                                                </p>
                                                                <span aria-hidden="true"
                                                                    style="background-color: {{$color}}"
                                                                    class="h-8 w-8 border border-black border-opacity-10 rounded-full"></span>
                                                            </label>
                                                            @endforeach
                                                            @error('color')
                                                            <p class="text-red-500 text-ms">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </fieldset>
                                                </div>

                                                <!-- Sizes -->
                                                <div class="mt-10">
                                                    <div class="flex items-center justify-between">
                                                        <h3 class="text-sm text-gray-900 font-medium">Size</h3>
                                                        <a href="#"
                                                            class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size
                                                            guide</a>
                                                    </div>
                                                    <fieldset class="mt-4">
                                                        <legend class="sr-only">Choose a size</legend>
                                                        <div
                                                            class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">

                                                            @php
                                                            $sizes = ["XXS","XS","S","M","L","XL","2XL","3XL"];
                                                            $sizeProduct = explode(',', $product->size);
                                                            @endphp
                                                            @foreach ($sizes as $size)
                                                            <label wire:click="$set('sizeActive', '{{$size}}')"
                                                                @if($sizeActive==$size) @if (in_array($size,
                                                                $sizeProduct))
                                                                class="group relative border rounded-md ring-2 ring-indigo-500 py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer"
                                                                @else
                                                                class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer"
                                                                @endif @else
                                                                class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer"
                                                                @endif>
                                                                @if (!in_array($size, $sizeProduct))
                                                                <input type="radio" name="size-choice" disabled
                                                                    class="sr-only"
                                                                    aria-labelledby="size-choice-1-label">
                                                                @else
                                                                <input type="radio" name="size-choice" value="{{$size}}"
                                                                    class="sr-only"
                                                                    aria-labelledby="size-choice-1-label"
                                                                    wire:model="ukuran">
                                                                @endif
                                                                <p id="size-choice-1-label">{{$size}}</p>

                                                                @if (!in_array($size, $sizeProduct))
                                                                <div class="absolute -inset-px rounded-md cursor-not-allowed bg-gray-100 opacity-30"
                                                                    aria-hidden="true">
                                                                    <svg class="absolute inset-0 w-full h-full text-gray-400 stroke-2"
                                                                        viewBox="0 0 100 100" preserveAspectRatio="none"
                                                                        stroke="currentColor">
                                                                        <line x1="0" y1="100" x2="100" y2="0"
                                                                            vector-effect="non-scaling-stroke" />
                                                                    </svg>
                                                                </div>
                                                                @endif
                                                            </label>
                                                            @endforeach
                                                        </div>
                                                        @error('ukuran')
                                                        <p class="text-red-500 text-ms">{{ $message }}</p>
                                                        @enderror
                                                    </fieldset>
                                                </div>

                                                <button type="submit"
                                                    wire:click="$set('category', '{{$product->category->name}}')"
                                                    class="mt-6 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add
                                                    to bag</button>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal product view -->
        </div>
        @endforeach


    </div>

</div>