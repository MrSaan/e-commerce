<div>
    <!-- comment show -->
    @foreach ($post->comments as $comment)
    <article class="flex space-x-6 my-10">
        <div class="flex-shrink-0">
            @if (!empty(auth()->user()->thumbnail))
            <img src="{{ asset('/storage/' . auth()->user()->thumbnail) }}" width="60" height="60" class="rounded-full">
            @else
            <div class="text-gray-400 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            @endif
        </div>

        <div class="flex-shrink-0">
            <header class="mb-4">
                <h3 class="font-bold">{{$comment->author->username}}</h3>

                <p class="text-xs">
                    Posted
                    <time>{{$comment->created_at->format('F j, Y, g:i a')}}</time>
                </p>
            </header>

            <p>
                {{ $comment->body }}
            </p>
        </div>
    </article>
    @endforeach
</div>