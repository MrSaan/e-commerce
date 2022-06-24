@extends('layouts.app')
@section('content')
<div class="container px-6 py-10 mx-auto">
    <div class="lg:flex lg:-mx-2">
        <div class="space-y-3 lg:w-1/5 lg:px-2 lg:space-y-4">
            @foreach ($categories as $category)
            <a href="?type={{$category->id}}" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">{{$category->name}}</a>
            @endforeach
        </div>

        <livewire:shop />

    </div>
</div>
@endsection