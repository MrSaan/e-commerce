<div class=" flex flex-col px-4 sm:px-0">

    <!-- header -->
    <h3 class="text-lg font-semibold leading-6 text-gray-900 dark:text-white">Customer Review</h3>
    <div class="flex items-center mb-3">

        @for ($i = 0; $i < $avgRating; $i++) <svg class="w-5 h-5 text-yellow-400" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
            </svg>
            @endfor
            <p class="ml-2 text-sm font-medium text-gray-900 dark:text-white">{{ $avgRating }}
                out of 5
            </p>

    </div>

    <!-- count rating -->
    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $countRating }} global ratings</p>

    <!-- variabel star -->
    <div>
        <div class="flex items-center mt-4">
            <span class="text-sm font-medium text-slate-800 dark:text-gray-300">5 star</span>
            <div class="w-2/4 h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                <div
                    class="h-3 bg-yellow-400 rounded @if(isset($ratingGroup[5]['star5'])) w-[{{$ratingGroup[5]['star5'] * 100 / $countRating}}%] @else w-0 @endif">
                </div>
            </div>
            <span class="text-sm font-medium text-slate-800 dark:text-gray-300">
                @if (isset($ratingGroup[5]['star5']))
                {{$ratingGroup[5]['star5'] * 100 / $countRating}}%
                @else
                0%
                @endif
            </span>
        </div>
        <div class="flex items-center mt-4">
            <span class="text-sm font-medium text-slate-800 dark:text-gray-300">4 star</span>
            <div class="w-2/4 h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                <div
                    class="h-3 bg-yellow-400 rounded  @if(isset($ratingGroup[4]['star4'])) w-[{{$ratingGroup[4]['star4'] * 100 / $countRating}}%] @else w-0 @endif">
                </div>
            </div>
            <span class="text-sm font-medium text-slate-800 dark:text-gray-300">
                @if (isset($ratingGroup[4]['star4']))
                {{$ratingGroup[4]['star4'] * 100 / $countRating}}%
                @else
                0%
                @endif
            </span>
        </div>
        <div class="flex items-center mt-4">
            <span class="text-sm font-medium text-slate-800 dark:text-gray-300">3 star</span>
            <div class="w-2/4 h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                <div
                    class="h-3 bg-yellow-400 rounded @if(isset($ratingGroup[3]['star3'])) w-[{{$ratingGroup[3]['star3'] * 100 / $countRating}}%] @else w-0 @endif ">
                </div>
            </div>
            <span class="text-sm font-medium text-slate-800 dark:text-gray-300">
                @if (isset($ratingGroup[3]['star3']))
                {{$ratingGroup[3]['star3'] * 100 / $countRating}}%
                @else
                0%
                @endif
            </span>
        </div>
        <div class="flex items-center mt-4">
            <span class="text-sm font-medium text-slate-800 dark:text-gray-300">2 star</span>
            <div class="w-2/4 h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                <div
                    class="h-3 bg-yellow-400 rounded @if(isset($ratingGroup[2]['star2'])) w-[{{$ratingGroup[2]['star2'] * 100 / $countRating}}%] @else w-0 @endif">
                </div>
            </div>
            <span class="text-sm font-medium text-slate-800 dark:text-gray-300">
                @if (isset($ratingGroup[2]['star2']))
                {{$ratingGroup[2]['star2'] * 100 / $countRating}}%
                @else
                0%
                @endif
            </span>
        </div>
        <div class="flex items-center mt-4">
            <span class="text-sm font-medium text-slate-800 dark:text-gray-300">1 star</span>
            <div class="w-2/4 h-3 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                <div
                    class="h-3 bg-yellow-400 rounded @if(isset($ratingGroup[1]['star1'])) w-[{{$ratingGroup[1]['star1'] * 100 / $countRating}}%] @else w-0 @endif">
                </div>
            </div>
            <span class="text-sm font-medium text-slate-800 dark:text-gray-300">
                @if (isset($ratingGroup[1]['star1']))
                {{$ratingGroup[1]['star1'] * 100 / $countRating}}%
                @else
                0%
                @endif
            </span>
        </div>
    </div>

    <span class="text-lg mt-6 font-medium text-slate-800 dark:text-gray-200 ">Share your
        thoughts</span>
    <p class="text-sm font-medium text-gray-500 dark:text-gray-300">if you've used this product,
        share your
        thoughts with other customer</p>
</div>