<div class="max-w-4xl p-6 mx-auto dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Adding Voucher</h2>

    <form wire:submit.prevent="saveVoucher">
        <div x-data="{toogle: ''}" class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="code">code</label>
                <input id="code" type="text" wire:model="code"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-gray-700 dark:text-gray-200" for="type">type</label>
                <x-dropdown id="type">
                    <x-slot name="trigger" class="text-gray-700 dark:text-gray-200">
                        <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            {{$type}}
                            <!-- Heroicon name: solid/chevron-down -->
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-dropdown-item wire:click="$set('type', 'fixed')" @click="toogle='fixed'">Fixed</x-dropdown-item>
                    <x-dropdown-item wire:click="$set('type', 'percent')" @click="toogle='percent'">Percent</x-dropdown-item>
                </x-dropdown>                                           
                @error('type') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div x-show="toogle == 'fixed'">
                <label class="text-gray-700 dark:text-gray-200" for="value">value</label>
                <input id="value" type="text" wire:model="value""
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                @error('value') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div x-show="toogle == 'percent'">
                <label class="text-gray-700 dark:text-gray-200" for="slug">percent off</label>
                <input id="percent_off" type="text" wire:model="percent_off"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                @error('percent_off') <span class="error">{{ $message }}</span> @enderror
            </div>

        </div>

        <div class="flex justify-end mt-6">
            <button type="submit"
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
    <x-flash />
</div>