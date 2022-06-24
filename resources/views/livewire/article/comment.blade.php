<div>
    @auth
    <div class="flex flex-col gap-y-4 border-2 rounded-xl p-6 shadow-lg">
        <header class="flex items-center ">
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
            <div class="flex flex-col">
                <span class="ml-4 text-lg text-gray-800 dark:text-gray-200">{{auth()->user()->username}}</span>
                <span class="ml-4 text-xs text-gray-400 dark:text-gray-200" wire:model="time">@if ($post->updated_at !=
                    null)
                    {{$post->updated_at->diffForHumans()}}
                    @endif</span>
            </div>
        </header>

        <!-- input comment -->
        <form wire:submit.prevent="comment">
            <textarea name="comment" rows="5" wire:model="comment" placeholder="Write your review.."
                class="focus:outline-none mt-4 w-full bg-transparent dark:text-white">
            </textarea>

            @error('comment')
            <span class="text-xs text-red-500"> {{ $message }}</span>
            @enderror

            <div>
                <x-button type="submit">Submit</x-button>
            </div>
        </form>
    </div>
    @else
    <div>
        <p class="text-base dark:text-gray-200">Write a comment you must be
            <a href="/login" class="text-rose-600 dark:text-gray-200">Login</a> or
            <a href="/register" class="text-rose-600 dark:text-gray-200">Register</a>
        </p>
    </div>
    @endauth
    <x-flash />

</div>