<div class="flow-root px-4 mt-6 md:mb-6">

    <!-- list product -->
    <ul class="-my-6 divide-y divide-gray-200 dark:divide-gray-600">
        @if (Cart::count() > 0)
        <div class="pb-6">
            <span class="text-base dark:text-gray-300">{{Cart::count()}} item(s) in Shopping Cart.</span>
        </div>
        @foreach (Cart::content() as $item)
        <li class="flex py-6">
            <div class="h-24 w-24 md:h-40 md:w-32 flex-shrink-0 overflow-hidden rounded-md border">
                <img src="{{asset('storage/'. $item->options->thumbnail)}}"
                    alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                    class="h-full w-full object-cover object-center">
            </div>

            <div class="ml-4 flex flex-1 flex-col">
                <div>
                    <div class="flex justify-between text-base font-medium text-gray-900 dark:text-gray-200">
                        <h3>
                            <a href="/shop/{{$item->id}}"> {{$item->name}} </a>
                        </h3>
                        <p class="ml-4">Rp.{{number_format($item->price, 2,',','.')}}</p>
                    </div>
                    <div class="flex flex-row gap-4">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">{{$item->options->category}}</p>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">|</p>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">{{$item->options->size}}</p>
                    </div>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">{{$item->options->color}}</p>
                    <span class="px-3 py-0 rounded-full" style="background-color: {{$item->options->color}}"></span>

                </div>
                <div class="flex flex-1 flex-col md:flex-row md:items-end md:justify-between text-sm">
                    {{-- <p class="text-gray-500 dark:text-gray-300">Qty {{$item->qty}}</p> --}}
                    <div class="flex flex-row gap-2 text-gray-800 justify-start md:justify-center items-center">
                        <label for="qty">Qty</label>
                        <input type="number" name="qty" min="1" placeholder="{{$item->qty}}" wire:model="buy"
                            class="w-16 border border-gray-200 p-1 rounded text-gray-700 placeholder-gray-400 bg-white dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
                        <a type="button" class="text-rose-600 cursor-pointer"
                            wire:click="changeQty('{{ $item->rowId }}')">change</a>
                    </div>
                    <div class="flex">
                        <button wire:click="destroy('{{$item->rowId}}')" type="button"
                            class="font-medium text-rose-600 hover:text-rose-500 dark:text-rose-400">Remove</button>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
        @else
        <div class="pb-6">
            <span class="text-base dark:text-gray-300">{{Cart::count()}} item(s) in Shopping Cart.</span>
        </div>
        @endif
    </ul>
    <x-flash />
</div>