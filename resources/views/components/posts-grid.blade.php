@props(['posts'])
<div class="space-y-12 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-6">
    <x-post-headline :post="$posts[0]" />

    <!-- cols-2 -->
    <div class="flex-col">
        @for ($i = 1; $i < 4; $i++) <div class="group flex gap-4 items-start  md:items-center md:mx-6 mx-2 my-2">
            <div class="w-2/5 h-40 shrink-0 overflow-hidden rounded-md">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg"
                    alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                    class="object-center object-cover">
            </div>
            <div class="flex flex-col gap-2 w-3/5">
                <a href="/article/{{ $posts[$i]->slug }}">
                    <h3 class="text-xs text-gray-500">
                        <span class="inset-0"></span>
                        <span
                            class="text-white text-xs px-1 py-1 md:px-2 md:py-1 bg-rose-500 rounded-lg">{{$posts[$i]->category->name}}</span>
                        <span class="text-xs dark:text-gray-200">5 min to read</span>
                    </h3>
                    <div class="w-full">
                        <p
                            class=" mt-4 text-base md:text-2xl font-semibold tracking-wide capitalize text-gray-900 truncate dark:text-white">
                            {{$posts[$i]->title}}.</p>
                    </div>
                    <div class="flex items-center my-2 md:my-0">
                        @if (!empty($comment->user->thumbnail))
                        <img src="{{ asset('/storage/' . $comment->user->thumbnail) }}" width="60" height="60"
                            class="rounded-full">
                        @else
                        <div class="text-gray-400 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        @endif
                        <div class="flex-col md:pt-4">
                            <h2 class="text-sm ml-2 md:ml-4 font-medium dark:text-gray-200">
                                {{$posts[$i]->author->username}}
                            </h2>
                            <span
                                class="ml-2 md:ml-4 text-xs text-gray-400 dark:text-gray-300">{{$posts[$i]->updated_at->diffForHumans()}}</span>
                        </div>
                    </div>
                </a>
            </div>
    </div>
    @endfor
</div>
</div>
<div class="max-w-5xl mx-auto py-6">
    @for ($i = 4; $i < $posts->count(); $i++)
        <div class="group flex gap-4 items-start  md:items-center md:mx-6 mx-2 my-2">
            <div class="w-2/5 h-40 shrink-0 overflow-hidden rounded-md">
                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg"
                    alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                    class="object-center object-cover">
            </div>
            <div class="flex flex-col gap-2 w-3/5">
                <a href="/article/{{ $posts[$i]->slug }}">
                    <h3 class="text-xs text-gray-500">
                        <span class="inset-0"></span>
                        <span
                            class="text-white text-xs px-1 py-1 md:px-2 md:py-1 bg-rose-500 rounded-lg">{{$posts[$i]->category->name}}</span>
                        <span class="text-xs dark:text-gray-200">5 min to read</span>
                    </h3>
                    <div class="w-full">
                        <p
                            class=" mt-4 text-base md:text-2xl font-semibold tracking-wide capitalize truncate text-gray-900 dark:text-white">
                            {{$posts[$i]->title}}</p>
                    </div>
                    <div class="flex items-center my-2 md:my-0">
                        @if (!empty($comment->user->thumbnail))
                        <img src="{{ asset('/storage/' . $comment->user->thumbnail) }}" width="60" height="60"
                            class="rounded-full">
                        @else
                        <div class="text-gray-400 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        @endif
                        <div class="flex-col md:pt-4">
                            <h2 class="text-sm ml-2 md:ml-4 font-medium dark:text-gray-200">
                                {{$posts[$i]->author->username}}
                            </h2>
                            <span
                                class="ml-2 md:ml-4 text-xs text-gray-400 dark:text-gray-300">{{$posts[$i]->updated_at->diffForHumans()}}</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endfor
</div>