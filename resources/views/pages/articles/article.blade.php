@extends('layouts.full-page')

@section('content')
<main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
    <article class="max-w-4xl md:max-w-2xl mx-auto px-4 lg:px-0 lg:grid lg:grid-cols-12 gap-x-10">
        <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
            <!-- thumbnail post -->
            <img src="" alt="" class="rounded-xl">

            <p class="mt-4 block text-gray-400 text-xs">
                Published <time>{{ $post->updated_at->diffForHumans()}}</time>
            </p>

            <div class="flex items-center lg:justify-center text-sm mt-4">
                @if (!empty($comment->user->thumbnail))
                <img src="{{ asset('/storage/' . $comment->user->thumbnail) }}" width="60" height="60"
                    class="rounded-full">
                @else
                <div class="text-gray-400 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                @endif
                <div class="ml-3 text-left">
                    <a href="/?author={{ $post->author->username }}">
                        <h5 class="font-bold">{{$post->author->name}}</h5>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-span-8">
            <div class="flex justify-between mb-6">
                <a href="/articles"
                    class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                    <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path class="fill-current"
                                d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                            </path>
                        </g>
                    </svg>

                    Back to Posts
                </a>

                <div class="space-x-2">
                    <span
                        class="text-white text-xs px-1 py-1 md:px-2 md:py-1 bg-rose-500 rounded-lg">{{$post->category->name}}</span>
                </div>
            </div>

            <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                {{$post->title}}
            </h1>

            <div class="space-y-4 lg:text-lg leading-loose">
                {!!$post->body!!}
            </div>
        </div>

        <section class="col-start-5 col-span-8 mt-10 space-y-6">
            <!-- livewire comment section -->
            <livewire:article.comment :post="$post" />

            <!-- livewire show commentsection -->
            <livewire:article.comment-show :post="$post" />
        </section>
    </article>
</main>
@endsection