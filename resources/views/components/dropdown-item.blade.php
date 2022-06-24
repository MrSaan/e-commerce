@props(['active' => false])

@php
$classes ="block text-left px-3 z-50 leading-10 text-sm text-gray-600 capitalize transition-colors duration-200
transform dark:text-gray-300 hover:bg-rose-600 hover:text-white dark:hover:bg-gray-700 dark:hover:text-rose-600";

if ($active) $classes .= 'bg-rose-500 text-white';
@endphp

<a {{ $attributes(['class'=> $classes])}}
    >{{ $slot }}</a>