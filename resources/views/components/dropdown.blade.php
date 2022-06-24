@props(['trigger'])
<div x-data="{ show: false }" @click.away="show = false" class="relative z-50">

    <!-- trigger -->
    <div @click="show = !show">
        {{$trigger}}
    </div>

    <!-- item dropdown -->
    <div x-show="show"
        class="py-2 absolute whitespace-nowrap text-gray-700 mt-6 bg-white rounded-md shadow-xl dark:bg-gray-800">
        {{$slot}}
    </div>

</div>