<div x-show="modal" class="relative z-50" role="dialog" aria-modal="true">
    <div x-show="modal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity md:block z-50"></div>

    <div class="fixed z-50 inset-0 overflow-y-auto">
        <div class="flex min-h-screen text-center md:block md:px-2 lg:px-4" style="font-size: 0">
            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&#8203;</span>

            <div x-show="modal" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 md:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 md:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
                class="flex text-base text-left transform transition w-full md:inline-block md:max-w-2xl md:px-4 md:my-8 md:align-middle lg:max-w-4xl">

                <div
                    class="w-full relative flex flex-col mx-auto items-center bg-white rounded-lg px-4 pt-14 pb-8 overflow-hidden shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">

                    <h1 class="text-3xl font-semibold text-rose-600">Thank You</h1>
                    <span>for your order!</span>
                    <span>A confirmation email was sent</span>
                    <div class="pt-6 flex gap-4">
                        <a href="{{route('shop')}}"
                            class="px-4 py-2 bg-rose-400 rounded-lg text-white hover:bg-rose-600">Continue
                            Shopping</a>
                        <button @click="modal = false"
                            class="px-4 py-2 border-2 hover:bg-rose-600 hover:text-white hover:border-white border-gray-100 rounded-lg">Close</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>