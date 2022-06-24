<div class="mt-4 lg:mt-0 lg:row-span-3">
    <h2 class="sr-only">Product information</h2>
    <p class="text-3xl text-gray-900 dark:text-gray-100">{{$product->presentPrice()}}</p>

    <!-- Reviews -->
    <div class="mt-6">
        <h3 class="sr-only">Reviews</h3>
        <div class="flex items-center">
            <div class="flex items-center">
                <!--
                Heroicon name: solid/star

                Active: "text-gray-900", Default: "text-gray-200"
                -->
                <svg wire:model="rating" class=" @if ($rating >= 1) text-yellow-400 @endif h-5 w-5 flex-shrink-0"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <!-- Heroicon name: solid/star -->
                <svg wire:model="rating" class=" @if ($rating >= 2) text-yellow-400 @endif h-5 w-5 flex-shrink-0"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <!-- Heroicon name: solid/star -->
                <svg wire:model="rating" class=" @if ($rating >= 3) text-yellow-400 @endif h-5 w-5 flex-shrink-0"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <!-- Heroicon name: solid/star -->
                <svg wire:model="rating" class=" @if ($rating >= 4) text-yellow-400 @endif h-5 w-5 flex-shrink-0"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <!-- Heroicon name: solid/star -->
                <svg wire:model="rating" class=" @if ($rating >= 5) text-yellow-400 @endif h-5 w-5 flex-shrink-0"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
            </div>
            <p class="sr-only">4 out of 5 stars</p>
            <span class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-300" wire:model="count">{{ $count }}
                reviews</span>
        </div>
    </div>

    <form class="mt-10" wire:submit.prevent="save">
        <!-- qty -->
        <div class="text-base text-gray-400 flex flex-row items-center justify-start w-auto pb-6">
            <div class="flex flex-col gap-2 text-gray-800">
                <label for="qty">Qty</label>
                <input type="number" name="qty" min="1" wire:model="buy"
                    class="w-16 border border-gray-200 p-1 rounded text-gray-700 placeholder-gray-400 bg-white dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            @if ($buy <= $qty) <span class="pt-6 px-4 text-xs md:text-base">✔ In stock and ready to ship</span>
                @else
                <span class="pt-6 px-4 text-xs md:text-base">❌ Out of stock</span>
                @endif
        </div>
        @error('buy')
        <p class="text-red-500 text-ms">{{ $message }}</p>
        @enderror

        <!-- Colors -->
        <div>
            <h3 class="text-sm text-gray-900 font-medium dark:text-gray-300">Color</h3>

            <fieldset class="mt-4">
                <legend class="sr-only">Choose a color</legend>
                <div class="flex items-center space-x-3">
                    <!--
                  Active and Checked: "ring ring-offset-1"
                  Not Active and Checked: "ring-2"
                -->
                    @foreach ($colors as $color)
                    <label wire:click="$set('colorActive', '{{ $color }}')" @if ($colorActive==$color)
                        class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400 ring ring-offset-1"
                        @else
                        class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400"
                        @endif>
                        <input type="radio" name="color-choice" value="{{$color}}" class="sr-only"
                            aria-labelledby="color-choice-0-label" wire:model="color">
                        <p id="color-choice-0-label" class="sr-only">{{$color}}</p>
                        <span aria-hidden="true" style="background-color: {{$color}}"
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
                <h3 class="text-sm text-gray-900 font-medium dark:text-gray-300">Size</h3>
                <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-300">Size guide</a>
            </div>
            <fieldset class="mt-4">
                <legend class="sr-only">Choose a size</legend>
                <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">

                    @php
                    $sizes = ["XXS","XS","S","M","L","XL","2XL","3XL"];
                    @endphp
                    @foreach ($sizes as $size)
                    <label wire:click="$set('sizeActive', '{{$size}}')" @if ($sizeActive==$size) @if (in_array($size,
                        $sizeProduct))
                        class="group relative border rounded-md ring-2 ring-indigo-500 py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer"
                        @else
                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer"
                        @endif @else
                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer"
                        @endif {{--
                        class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer"
                        --}} {{-- :class="active ? 'ring-2 ring-indigo-500' : '' " --}}>
                        @if (!in_array($size, $sizeProduct))
                        <input type="radio" name="size-choice" disabled class="sr-only"
                            aria-labelledby="size-choice-1-label">
                        @else
                        <input type="radio" name="size-choice" value="{{$size}}" class="sr-only"
                            aria-labelledby="size-choice-1-label" wire:model="ukuran">
                        @endif
                        <p id="size-choice-1-label">{{$size}}</p>
                        <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        @if (!in_array($size, $sizeProduct))
                        <div class="absolute -inset-px rounded-md cursor-not-allowed bg-gray-100 opacity-30"
                            aria-hidden="true">
                            <svg class="absolute inset-0 w-full h-full text-gray-400 stroke-2" viewBox="0 0 100 100"
                                preserveAspectRatio="none" stroke="currentColor">
                                <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
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

        <button type="submit" wire:click="$set('thumbnail', '{{$product->thumbnail->thumbnail_2}}')"
            class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add
            to bag</button>

    </form>
    <x-flash />
</div>