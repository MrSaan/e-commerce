<div class="px-4 md:px-0 py-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-y-6 gap-x-4 w-full">

    @foreach ($products as $product)
    <div class="group relative">
        <div
            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                alt="Front of men&#039;s Basic Tee in black."
                class="w-full h-full object-center object-cover lg:w-full lg:h-full">
        </div>
        <button
            class="absolute z-20 px-2 py-1 rounded-lg border border-gray-400 top-0 right-0 mt-4 mr-4 hover:bg-rose-600 hover:text-white hover:border-white"
            title="Add To Cart">
            <a href="#">+</a>
        </button>
        <div class="flex flex-row justify-between w-full pt-4">
            <span class="text-xs text-gray-600 capitalize">{{$product->category->name}}</span>
            <span class="text-xs text-gray-600 flex gap-1">{!! $product->size !!}</span>
        </div>
        <div class="mt-4 flex justify-between">
            <div>
                <h3 class="text-sm text-gray-700">
                    <a href="/shop/{{$product->id}}">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        {{ $product->name }}
                    </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">{{ $product->slug }}</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-900 line-through">$35</p>
                <p class="text-xl font-semibold text-gray-900">{{ $product->presentPrice() }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>