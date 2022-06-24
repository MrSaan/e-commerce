@props(['name'])

<div class="mt-6">

    <x-form.label name="{{ $name }}" />

    <input
        class='border border-gray-200 p-2 w-full rounded text-gray-700 placeholder-gray-400 bg-white dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40'
        name="{{$name}}" id="{{$name}}" {{$attributes([ 'value'=>
    old($name)]) }}
    >

    <x-form.error name="{{$name}}" />
</div>