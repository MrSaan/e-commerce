<div x-data="{modal : false, code: false}"
    class="py-4 mx-4 mb-6 rounded-md px-4 sm:px-6 bg-gray-100 h-min dark:bg-gray-900">

    <div class="flex flex-col">
        <p class="mt-0.5 text-xl text-gray-700 font-semibold dark:text-gray-100">Order Summary</p>

        <div
            class="flex justify-between text-sm font-medium text-gray-600 py-2 border-b border-gray-300 dark:text-gray-200 dark:border-gray-600">
            <p>Subtotal</p>
            <p>Rp.{{Cart::subtotal()}}</p>
        </div>

        <div
            class="flex justify-between text-sm font-medium text-gray-600 py-2 border-b border-gray-300 dark:text-gray-200 dark:border-gray-600">
            <p>Shipping estimate</p>
            <p>Rp.0</p>
        </div>

        <!-- show if has been session coupon is -->
        @if (session()->has('coupon'))
        <div
            class="flex justify-between text-sm font-medium text-gray-600 py-2 border-b border-gray-300 dark:text-gray-200 dark:border-gray-600">
            <p class="flex items-center">Discount: <span class="italic text-rose-300"> {{
                    session()->get('coupon')['name']
                    }}</span>
                <span wire:click="unredeem"
                    class=" ml-2 items-center text-white cursor-pointer px-2 rounded-md bg-rose-600"
                    title="remove voucher">x</span>
            </p>
            <p>-Rp.{{number_format($discount, 2, ".", ",")}}</p>
        </div>

        <div
            class="flex justify-between text-sm font-medium text-gray-600 py-2 border-b border-gray-300 dark:text-gray-200 dark:border-gray-600">
            <p>New Subtotal</p>
            <p>Rp.{{number_format($newSubTotal, 2, ".", ",")}}</p>
        </div>
        @endif
        <!-- end session coupon -->
        <div
            class="flex justify-between text-sm font-medium text-gray-600 py-2 border-b border-gray-300 dark:text-gray-200 dark:border-gray-600">
            <p>Tax estimate (11%)</p>
            <p>Rp.{{number_format($newTax, 2, ".", ",")}}</p>
        </div>


        <div
            class="flex justify-between text-text-xl font-semibold text-gray-900 py-2 dark:text-gray-200 dark:border-gray-600">
            <p>Order Total</p>
            <p>${{number_format($newTotal, 2, ".", ",")}}</p>
        </div>
    </div>

    <div class="flex">
        @auth
        <div class="mt-6 w-full">
            <button id="pay-button"
                class="flex w-full items-center justify-center rounded-md border border-transparent bg-rose-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-rose-700">Checkout</button>
        </div>
        @else
        <div class="mt-6">
            <span class="text-sm text-gray-600 italic">
                Checkout you must be
                <a href="/login" class="text-rose-600">
                    log in!
                </a>
            </span>
        </div>
        @endauth
    </div>

    <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
        <p>
            @if (!session()->has('coupon'))
            <a @click="code= !code"
                class="font-medium text-rose-600 hover:text-rose-500 dark:text-rose-400 cursor-pointer">Have a code?</a>
            @endif
            or <a href="{{route('shop')}}" type="button"
                class="font-medium text-rose-600 hover:text-rose-500 dark:text-rose-400">Continue
                Shopping<span aria-hidden="true"> &rarr;</span></a>
        </p>
    </div>

    <div>
        <!-- show if not have session('coupon') -->
        @if (!session()->has('coupon'))
        <div x-show="code" class="mt-6">

            <!-- voucher -->
            <div class="flex shadow-md ">
                <input name="voucher" wire:model="voucher" type="text" size="50" placeholder="code is here..."
                    class="py-2 lg:py-0 pl-4 w-full focus-within:outline-none border h-9 text-xs">
                <button type="submit" title="Redeem" wire:click="redeem"
                    class="transition-colors duration-300 bg-rose-500 hover:bg-rose-600 lg:mt-0 text-xs font-semibold text-white uppercase  px-5 -ml-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                    </svg>
                </button>
            </div>
            @error('voucher')
            <p class="text-red-500 text-ms">{{ $message }}</p>
            @enderror
            <!-- end voucher -->

            <!-- voucher list -->
            <div class="my-4">
                @foreach ($vouchers as $item)
                <div
                    class="flex items-center justify-between px-2 py-4 mb-2 mx-auto border border-blue-500 cursor-pointer rounded-xl">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" viewBox="0 0 20 20"
                            fill="currentColor">
                           
                        </svg>

                        <div class="flex flex-col items-start mx-2 space-y-1">
                            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200">{{$item->code}}</h2>
                            <div class="text-xs text-blue-500">
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
            <!-- end voucher ist -->
        </div>
        @endif
    </div>

    @if ($modal == true)
    <x-modals />
    @endif

    <script>
        document.addEventListener('livewire:load', function () {
            let snaptoken  = @this.snapToken;

            // For example trigger on button clicked, or any time you need
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function () {
                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                // alert(snaptoken);
                window.snap.pay(snaptoken, {
                    onSuccess: function(result){
                        /* You may add your own implementation here */
                        // alert("payment success!"); console.log(result);
                        @this.modal = true;
                        livewire.emit('checkout', result);
                    },
                    onPending: function(result){
                        /* You may add your own implementation here */
                        alert("wating your payment!"); console.log(result);
                    },
                    onError: function(result){
                        /* You may add your own implementation here */
                        alert("payment failed!"); console.log(result);
                    },
                    onClose: function(){
                        /* You may add your own implementation here */
                        alert('you closed the popup without finishing the payment');
                    }
                });
                // customer will be redirected after completing payment pop-up
            });
        })
    </script>
    <x-flash />

</div>