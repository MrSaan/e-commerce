<div class="shadow sm:rounded-md sm:overflow-hidden">
    <form wire:submit.prevent="save">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
                <div class="col-span-3 sm:col-span-2">
                    <x-form.input name="username" type="text" placeholder="{{$user->username}}" wire:model="username" />
                    <x-form.input name="email" type="email" placeholder="{{$user->email}}" wire:model="email" />
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700"> Photo </label>
                <div class="mt-1 flex items-center">
                    <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                        <img src=" {{asset('storage/' . $user->thumbnail)}} " alt="">
                    </span>
                    <input name="thumbnail" type="file" wire:model="thumbnail"
                        class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    @error("thumbnail")
                    <p class="text-red-500 text-ms">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
        </div>
        <x-flash />
    </form>
</div>