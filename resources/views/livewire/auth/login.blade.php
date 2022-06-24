<div>
    <form wire:submit.prevent="store">
        @csrf
        <div>
            <x-form.input name="email" type="email" placeholder="example@example.com" wire:model="email" />
            <x-form.input name="password" type="password" placeholder="Your Password" wire:model="password" />

            <div class="mt-6">
                <div class="flex justify-between mb-2">
                    <a href="#"
                        class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot
                        password?</a>
                </div>
            </div>

            <div class="mt-6">
                <x-button type="submit" class="w-full">Sign in</x-button>
            </div>

    </form>

    <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet?
        <a href="/register" class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.
    </p>
</div>