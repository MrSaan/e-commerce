@foreach ($articles as $article)
<div class="p-4 hover:shadow-lg hover:bg-white hover:rounded-lg hover:duration-300 dark:hover:bg-rose-600">
    <a class="flex flex-col justify-center space-y-2">
        <div class="aspect-w-8 aspect-h-7 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1555009393-39be6ef89604?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                alt="photo1" class=" object-cover object-center rounded-md">
        </div>
        <div class="flex flex-col gap-2 pt-2">
            <a href="/article/{{ $article->slug }}">
                <h3 class="text-xs text-gray-500">
                    <span class="inset-0"></span>
                    <span
                        class="text-white text-xs px-1 py-1 md:px-2 md:py-1 bg-rose-500 rounded-lg">{{$article->category->name}}</span>
                    <span class="text-xs dark:text-gray-200">5 min to read</span>
                </h3>
                <div class="w-full">
                    <p
                        class=" mt-4 text-base md:text-xl font-semibold tracking-wide capitalize truncate text-gray-900 dark:text-white">
                        {{$article->title}}</p>
                </div>
                <div class="flex items-center my-2 md:my-0">
                    @if (!empty($article->author->thumbnail))
                    <img src="{{ asset('/storage/' . $article->author->thumbnail) }}" width="60" height="60"
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
                    <div class="flex-col md:pt-4">
                        <h2 class="text-sm ml-2 md:ml-4 font-medium dark:text-gray-200">
                            {{$article->author->username}}
                        </h2>
                        <span
                            class="ml-2 md:ml-4 text-xs text-gray-400 dark:text-gray-300">{{$article->updated_at->diffForHumans()}}</span>
                    </div>
                </div>
            </a>
        </div>
    </a>
</div>
@endforeach