<div class="max-w-4xl p-6 mx-auto bg-white dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Adding Product</h2>

    <form wire:submit.prevent="saveProduct">
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-5">
          <div class="sm:col-span-3">
              <label class="text-gray-700 dark:text-gray-200" for="title">Title</label>
              <input id="title" type="text" wire:model="title"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
          </div>

          <div class="sm:col-span-2">
              <label class="text-gray-700 dark:text-gray-200" for="slug">Slug</label>
              <input id="slug" type="text" wire:model="slug"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
          </div>

          <div>
              <label class="text-gray-700 dark:text-gray-200" for="gender">Gender</label>
              <x-dropdown id="gender">
                  <x-slot name="trigger">
                      <input id="title" type="button" value="{{$gender}}"
                          class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                  </x-slot>

                  <!-- choice -->
                  <x-dropdown-item wire:click="$set('gender', 'male')">Male</x-dropdown>
                  <x-dropdown-item wire:click="$set('gender', 'female')">Female</x-dropdown>
              </x-dropdown>
          </div>

          <div>
              <label class="text-gray-700 dark:text-gray-200" for="category">Category</label>
              <x-dropdown id="category">
                  <x-slot name="trigger">
                      <input id="title" type="button" value="{{$category}}"
                          class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                  </x-slot>

                  <!-- choice -->
                  @foreach ($categories as $item)
                  <x-dropdown-item wire:click="$set('category', '{{$item->id}}')">{{$item->name}}</x-dropdown>
                  @endforeach
              </x-dropdown>            </div>

          <div>
              <label class="text-gray-700 dark:text-gray-200" for="color">color</label>
              <input id="color" type="text" wire:model="color"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
          </div>

          <div>
              <label class="text-gray-700 dark:text-gray-200" for="price">price</label>
              <input id="price" type="number" wire:model="price"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
          </div>

          <div>
              <label class="text-gray-700 dark:text-gray-200" for="qty">qty</label>
              <input id="qty" type="number" wire:model="qty"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
          </div>

          <div class="sm:col-span-5 ">
              <div class="flex items-center justify-between">
                  <h3 class="text-sm text-gray-900 font-medium">Size</h3>
              </div>

              <div class="grid grid-cols-8 gap-4">
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                      <input wire:model="size.xxs" type="checkbox" name="size-choice" value="XXS" class="" aria-labelledby="size-choice-1-label">
                      <span id="size-choice-1-label">XXS </span>
    
                      <!--
                        Active: "border", Not Active: "border-2"
                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                      -->
                      <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input wire:model="size.xs" type="checkbox" name="size-choice" value="XS" class="" aria-labelledby="size-choice-1-label">
                    <span id="size-choice-1-label"> XS </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input wire:model="size.s" type="checkbox" name="size-choice" value="S" class="" aria-labelledby="size-choice-2-label">
                    <span id="size-choice-2-label"> S </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input wire:model="size.m" type="checkbox" name="size-choice" value="M" class="" aria-labelledby="size-choice-3-label">
                    <span id="size-choice-3-label"> M </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input wire:model="size.l" type="checkbox" name="size-choice" value="L" class="" aria-labelledby="size-choice-4-label">
                    <span id="size-choice-4-label"> L </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input wire:model="size.xl" type="checkbox" name="size-choice" value="XL" class="" aria-labelledby="size-choice-5-label">
                    <span id="size-choice-5-label"> XL </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input wire:model="size.xxl" type="checkbox" name="size-choice" value="2XL" class="" aria-labelledby="size-choice-6-label">
                    <span id="size-choice-6-label"> 2XL </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
  
                  <!-- Active: "ring-2 ring-indigo-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input wire:model="size.xxxl" type="checkbox" name="size-choice" value="3XL" class="" aria-labelledby="size-choice-7-label">
                    <span id="size-choice-7-label"> 3XL </span>
  
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                  </label>
              </div>
          </div>

          <div class="sm:col-span-2">
              <label class="text-gray-700 dark:text-gray-200" for="detail">Detail</label>
              <textarea id="detail" wire:model="detail" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
              </textarea>
          </div>

          <div class="sm:col-span-3">
            <label class="text-gray-700 dark:text-gray-200" for="description">Description</label>
            <textarea id="description" wire:model="description" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </textarea>
          </div>
        </div>

        <div class="grid grid-cols-1 gap-4 py-6">
          <div>
            <label class="text-gray-700 dark:text-gray-200" for="thumbnail1">thumbnail1</label>
            <input id="thumbnail1" type="file" wire:model="thOne">
          </div>

          <div>
            <label class="text-gray-700 dark:text-gray-200" for="thumbnail2">thumbnail2</label>
            <input id="thumbnail2" type="file" wire:model="thTwo">
          </div>

          <div>
            <label class="text-gray-700 dark:text-gray-200" for="thumbnail3">thumbnail3</label>
            <input id="thumbnail3" type="file" wire:model="thThree">
          </div>

          <div>
            <label class="text-gray-700 dark:text-gray-200" for="thumbnail4">thumbnail4</label>
            <input id="thumbnail4" type="file" wire:model="thFour">
          </div>
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit"
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
</div>