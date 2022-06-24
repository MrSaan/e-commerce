<div>
    <div class="p-6">
        @auth
        <div class="flex flex-col gap-y-4">
            <header class="flex items-center ">
                @if (!empty(auth()->user()->thumbnail))
                <img src="{{ asset('/storage/' . auth()->user()->thumbnail) }}" width="60" height="60"
                    class="rounded-full">
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
                    <span class="ml-4 text-xs text-gray-400 dark:text-gray-200" wire:model="time">@if ($time != null)
                        {{$time->diffForHumans()}}
                        @endif</span>
                </div>
            </header>

            <!-- input comment -->
            <form wire:submit.prevent="rate">
                <div>
                    <!-- input star section-->
                    <div class="flex flex-row space-x-2 text-gray-400">
                        <label for="star1">
                            <input hidden id="star1" type="radio" wire:model="rating" value="1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 cursor-pointer @if($rating >= 1) text-yellow-400 @endif"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </label>
                        <label for="star2">
                            <input hidden id="star2" type="radio" wire:model="rating" value="2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 cursor-pointer @if($rating >= 2) text-yellow-400 @endif"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </label>
                        <label for="star3">
                            <input hidden id="star3" type="radio" wire:model="rating" value="3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 cursor-pointer @if($rating >= 3) text-yellow-400 @endif"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </label>
                        <label for="star4">
                            <input hidden id="star4" type="radio" wire:model="rating" value="4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 cursor-pointer @if($rating >= 4) text-yellow-400 @endif"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </label>
                        <label for="star5">
                            <input hidden id="star5" type="radio" wire:model="rating" value="5">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10 cursor-pointer @if($rating >= 5) text-yellow-400 @endif"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </label>
                    </div>
                </div>
                <textarea name="comment" rows="5" wire:model="comment" placeholder="Write your review.."
                    class="focus:outline-none mt-4 w-full bg-transparent dark:text-white">  </textarea>
                <div>
                    <x-button type="submit">Submit</x-button>
                    <!-- button delete rating -->
                    @if ($currentId)
                    <button type="submit"
                        class="px-4 py-2 bg-slate-300 text-white hover:bg-rose-300 capitalize rounded-lg"
                        wire:click.prevent="delete({{ $currentId }})">delete</button>
                    @endif
                </div>
            </form>
        </div>
        @else
        <div>
            <p class="text-base dark:text-gray-200">Write a review you must be
                <a href="/login" class="text-rose-600 dark:text-gray-200">Login</a> or
                <a href="/register" class="text-rose-600 dark:text-gray-200">Register</a>
            </p>
        </div>
        @endauth

    </div>

    @foreach ($comments as $comment)
    <div class="p-6 pt-14 border-t-2 border-gray-100">
        <div class="flex flex-col gap-y-4">
            <header class="flex items-center ">
                @if (!empty($comment->user->thumbnail))
                <img src="{{ asset('/storage/' . $comment->user->thumbnail) }}" width="60" height="60"
                    class="rounded-full">
                @else
                <div class="text-gray-400 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                @endif
                <div>
                    <h2 class="ml-4 dark:text-gray-200">{{$comment->user->username}}</h2>
                    <span class="ml-4 text-xs text-gray-400 dark:text-gray-300">{{
                        $comment->updated_at->diffForHumans()}}</span>
                    <div class="flex items-center ml-4 pt-2">
                        <div class="flex flex-row space-x-1 text-gray-400">
                            @for ($i = 0; $i < $comment->rating; $i++)
                                <label for="star1">
                                    <input hidden id="star1" type="radio">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-yellow-400"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </label>
                                @endfor
                        </div>
                    </div>
                </div>
            </header>

            <div class="pt-4 text-base text-gray-700 italic dark:text-white">
                <p>{{$comment->comment}}</p>
            </div>


        </div>
    </div>
    @endforeach
    <x-flash />
</div>