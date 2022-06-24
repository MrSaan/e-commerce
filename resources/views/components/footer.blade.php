<footer id="newsletter"
    class="bg-gray-100 border border-black border-opacity-5 text-center py-16 px-10 dark:bg-gray-800">

    <h5 class="text-3xl dark:text-gray-300">Tetap terhubung dengan produk terbaru</h5>
    <p class="text-sm mt-3 dark:text-gray-300">Janji untuk menjaga kotak masuk tetap bersih. Tidak ada bug.</p>

    <div class="mt-10">
        <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

            <form method="POST" action="/newslatter" class="lg:flex text-sm">
                @csrf

                <div class="lg:py-3 lg:px-5 flex items-center">
                    <label for="email" class="hidden lg:inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </label>

                    <div>
                        <input id="email" name="email" type="text" placeholder="Your email address"
                            class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">

                        @error('email')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit"
                    class="transition-colors duration-200
                    transform hover:bg-rose-400 focus:outline-none focus:bg-rose-400 focus:ring focus:ring-rose-300
                    focus:ring-opacity-50transition-colors bg-rose-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-medium text-white uppercase py-3 px-8">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</footer>