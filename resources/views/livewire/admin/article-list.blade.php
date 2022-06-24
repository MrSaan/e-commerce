<div class="p-4 w-full mx-auto flex items-start">
    <table class="w-full">
        <thead>
            <tr class="capitalize text-base text-gray-600 border-b-[1px]">
                <th scope="col">id</th>
                <th scope="col" class="border-l-[1px]">user</th>
                <th scope="col" class="border-l-[1px]">category</th>
                <th scope="col" class="border-l-[1px]">title</th>
                <th scope="col" class="border-l-[1px]">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($article as $item)
            <tr x-data="{modal{{$item->id}}: false}">
                <th scope="row">{{$item->id}}</th>
                <td class="pl-2 py-2">{{$item->author->username}}</td>
                <td class="pl-2 py-2">{{$item->category->name}}</td>
                <td class="pl-2 py-2">{{$item->title}}</td>
                <td class="pl-2 py-2 flex flex-row justify-center items-center">
                    <a @click="modal{{$item->id}}=true" class="cursor-pointer text-rose-600" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>|
                    <a wire:click="remove({{$item->id}})" class="text-rose-600 cursor-pointer" title="remove">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </a>
                     <!-- modal-->
                    <div x-show="modal{{$item->id}}" class="z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <!--
                        Background backdrop, show/hide based on modal state.
                    
                        Entering: "ease-out duration-300"
                            From: "opacity-0"
                            To: "opacity-100"
                        Leaving: "ease-in duration-200"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                
                        <div class="fixed z-10 inset-0 overflow-y-auto">
                            <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
                                <!--
                            Modal panel, show/hide based on modal state.
                    
                            Entering: "ease-out duration-300"
                                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                To: "opacity-100 translate-y-0 sm:scale-100"
                            Leaving: "ease-in duration-200"
                                From: "opacity-100 translate-y-0 sm:scale-100"
                                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            -->
                                <div
                                    class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                                    <form wire:submit.prevent="editVoucher({{$item->id}})">
                                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                            <div class="sm:flex sm:items-start">
                                                <div
                                                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                    <!-- Heroicon name: outline/exclamation -->
                                                     <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                    </svg>
                                                </div>
                                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Edit
                                                        Voucher
                                                    </h3>
                                                </div>
                                            </div>
                
                                            <div>
                                                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                                    <div>
                                                        <label class="text-gray-700 dark:text-gray-200" for="name">user</label>
                                                        <input id="name" type="text" wire:model="user" placeholder="{{$item->author->username}}"
                                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                                        @error('name') <span class="error">{{ $message }}</span> @enderror
                                                    </div>
                
                                                    <div class="flex flex-col gap-2">
                                                        <label class="text-gray-700 dark:text-gray-200" for="category">category</label>
                                                        <x-dropdown id="category">
                                                            <x-slot name="trigger" class="text-gray-700 dark:text-gray-200">
                                                                <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                                                    {{$category}}
                                                                    <!-- Heroicon name: solid/chevron-down -->
                                                                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                                    </svg>
                                                                </button>
                                                            </x-slot>

                                                            @foreach ($categories as $item)                                                                
                                                            <x-dropdown-item wire:click="$set('category', {{$item->name}})">{{$item->name}}</x-dropdown-item>
                                                            @endforeach
                                                        </x-dropdown>                                           
                                                        @error('type') <span class="error">{{ $message }}</span> @enderror
                                                    </div>

                                                    <div>
                                                        <label class="text-gray-700 dark:text-gray-200" for="slug">slug</label>
                                                        <input id="slug" type="text" wire:model="user" placeholder="{{$item->slug}}"
                                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                                        @error('slug') <span class="error">{{ $message }}</span> @enderror
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                            <button type="submit"
                                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Save</button>
                                            <button @click="modal{{$item->id}}=false" type="button"
                                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <x-flash />
</div>