<div class="group relative md:border-2 md:border-gray-500 p-4 rounded-xl md:max-w-2xl mx-auto">
    <div
        class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64">
        <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg"
            alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
            class="w-full h-full object-center object-cover">
    </div>
    <h3 class="mt-6 text-xs text-gray-500">
        <a href="/article/{{$post->slug}}">
            <span class="absolute inset-0"></span>
            <span class="text-white px-2 py-1 bg-rose-500 rounded-lg">{{$post->category->name}}</span>
            <span class="text-xs dark:text-gray-200">5 min to read</span>
        </a>
    </h3>
    <p class=" mt-4 text-2xl font-semibold tracking-wide capitalize text-gray-900 dark:text-white">{{$post->title}}</p>
    <div class="flex items-center">
        @if (!empty($comment->user->thumbnail))
        <img src="{{ asset('/storage/' . $comment->user->thumbnail) }}" width="60" height="60" class="rounded-full">
        @else
        <div class="text-gray-400 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                    clip-rule="evenodd" />
            </svg>
        </div>
        @endif
        <div class="flex-col">
            <h2 class="ml-4 font-medium dark:text-gray-200">{{$post->author->username}}</h2>
            <span class="ml-4 text-xs text-gray-400 dark:text-gray-300">{{$post->created_at->diffForHumans()}}</span>
        </div>
    </div>
</div>