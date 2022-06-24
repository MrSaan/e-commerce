@extends('layouts.app')

@section('content')
<!-- hero section -->
<div class="container flex flex-col px-6 py-4 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
  <div class="flex flex-col items-center w-full mt-4 lg:mt-0 lg:flex-row lg:w-1/2">
    <div class="max-w-lg lg:mx-12 lg:order-2">
      <h1 class="text-sm font-black tracking-tight text-gray-800 dark:text-gray-300 uppercase">Trendly
        collection's 🔥
      </h1>
      <p
        class="mt-4 text-gray-800 font-bold text-5xl md:text-7xl tracking-tighter uppercase max-w-md dark:text-gray-100">
        Dresses to be
        noticed.</p>
      <p class="text-sm text-gray-800 max-w-xs my-10 border-l-4 pl-4 dark:text-gray-300">Fashion is apart of the daily
        air and it changes
        all
        the
        time, with
        all
        the events.
      </p>
      <div class="mt-6 flex items-center">
        <a href="/shop" type="button"
          class="px-5 md:px-6 py-4 bg-rose-600 text-white rounded-full tracking-wide text-sm flex items-center">Start
          Shopping
          <div class="px-2 py-2 rounded-full bg-slate-800 ml-4 dark:bg-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="3">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </a>

        <a href="" class="capitalize flex items-center ml-3">
          <span class="text-slate-400 w-16 dark:text-indigo-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-18" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                clip-rule="evenodd" />
            </svg>
          </span>
          <span class="hidden md:flex text-xs font-semibold dark:text-gray-300">What's trending ?</span>
        </a>
      </div>
    </div>
  </div>

  <div class="relative hidden md:flex items-center justify-center w-full h-screen lg:w-1/2">
    <div class="absolute md:ml-28 lg:ml-0">
      <img src="{{ asset('images/PNG/Richie_3.png') }}" alt="" class="object-cover -mb-16">
    </div>
    @auth
    <span
      class="absolute top-28 md:-mt-20 lg:mt-0 lg:left-0 lg:-ml-16 font-medium text-slate-800 max-w-[8rem] dark:text-gray-300">Hello,
      {{
      auth()->user()->username }}
      !</span>
    @endauth

    <div class="md:mr-20 lg:mr-0 right-0 absolute flex flex-col space-y-6">
      <div class="flex flex-row items-center space-x-2">
        <span class="font-semibold uppercase text-lg text-slate-800 px-4 dark:text-gray-300">Popular</span>
        <div
          class="ctgBtnL px-2 py-2 border rounded-full cursor-pointer hover:text-white hover:bg-rose-600 dark:bg-indigo-600 dark:text-white dark:hover:text-white dark:hover:bg-rose-600 dark:border-slate-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </div>
        <div
          class="ctgBtnR px-2 py-2 border rounded-full cursor-pointer hover:text-white hover:bg-rose-600 dark:bg-indigo-600 dark:text-white dark:hover:text-white dark:hover:bg-rose-600 dark:border-slate-800">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </div>
      </div>
      <div class="swiper max-w-[18rem] lg:max-w-xs shadow-2xl">
        <div class="swiper-wrapper">
          <!-- slide populer -->
          <div
            class="swiper-slide max-w-[18rem] lg:max-w-xs mx-auto overflow-hidden bg-white rounded-lg dark:bg-gray-900">
            <div class="px-4 py-2">
              <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white">NIKE AIR</h1>
              <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
            </div>

            <img class="object-cover w-full h-48 mt-2"
              src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=320&q=80"
              alt="NIKE AIR">

            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
              <h1 class="text-lg font-bold text-white">$129</h1>
              <button
                class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-200 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add
                to cart</button>
            </div>
          </div>

          <div
            class="swiper-slide max-w-[18rem] lg:max-w-xs mx-auto overflow-hidden bg-white rounded-lg dark:bg-gray-900">
            <div class="px-4 py-2">
              <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white">NIKE REVOLT</h1>
              <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
            </div>

            <img class="object-cover w-full h-48 mt-2"
              src="https://images.unsplash.com/photo-1521903062400-b80f2cb8cb9d?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80"
              alt="NIKE AIR">

            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
              <h1 class="text-lg font-bold text-white">$129</h1>
              <button
                class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-200 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add
                to cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end hero section -->

<!-- featured section -->
<div class="py-40 bg-[#F3F2F0] px-6 lg:px-0">
  <div class="max-w-6xl mx-auto flex flex-col">
    <div class="max-w-sm py-10">
      <span class="text-4xl font-semibold text-slate-800">One for all solution, for clothing store</span>
    </div>

    <div class="grid lg:grid-cols-3 gap-4 grid-cols-1">
      <!-- kiri -->
      <div class="lg:col-span-2 grid grid-cols-1 lg:grid-cols-2 gap-4 gap-y-6">
        {{-- Free gift --}}
        <div class="relative px-6 py-6 flex flex-col justify-start bg-white rounded-lg h-64 shadow-xl">
          <span class="text-2xl font-semibold text-slate-800">Free gift</span>
          <span class="text-base text-gray-500 py-4">You will get a free gift for every purchase above $500</span>
          <a href="" class="mt-6 text-rose-600 underline">Learn More</a>
          <div class="absolute bottom-0 right-0 w-28 rounded-tl-xl overflow-clip">
            <img src="{{ asset('svg/DrawKit-Vector-Illustration-ecommerce-15.svg') }}" alt="">
          </div>
        </div>
        {{-- No shipping fee --}}
        <div class="relative px-6 py-6 flex flex-col justify-start bg-white rounded-lg h-64 shadow-xl">
          <span class="text-2xl font-semibold text-slate-800">No shipping fee</span>
          <span class="text-base text-gray-500 py-4">You will only be free of change within 50kms range from our nearest
            store in your area, safe and delivered guaranteed</span>
          <a href="" class="mt-6 text-rose-600 underline">Learn More</a>
          <div class="absolute bottom-0 right-0 w-28 rounded-tl-xl overflow-clip">
            <img src="{{ asset('svg/DrawKit-Vector-Illustration-ecommerce-16.svg') }}" alt="" class=" object-center">
          </div>
        </div>
        {{-- Long lasting --}}
        <div class="relative px-6 py-6 flex flex-col justify-start bg-white rounded-lg h-64 shadow-xl">
          <span class="text-2xl font-semibold text-slate-800">Long lasting</span>
          <span class="text-base text-gray-500 py-4">You will only be free of change within 50kms range from our nearest
            store in your area, safe and delivered guaranteed</span>
          <a href="" class="mt-6 text-rose-600 underline">Learn More</a>
          <div class="absolute bottom-0 right-0 w-28 rounded-tl-xl overflow-clip">
            <img src="{{ asset('svg/DrawKit-Vector-Illustration-ecommerce-17.svg') }}" alt="" class=" object-center">
          </div>
        </div>
        {{-- Free Build --}}
        <div class="relative px-6 py-6 flex flex-col justify-start bg-white rounded-lg h-64 shadow-xl">
          <span class="text-2xl font-semibold text-slate-800">Free build</span>
          <span class="text-base text-gray-500 py-4">You will get a free gift for every purchase above $500</span>
          <a href="" class="mt-6 text-rose-600 underline">Learn More</a>
          <div class="absolute bottom-0 right-0 w-28 rounded-tl-xl overflow-clip">
            <img src="{{ asset('svg/DrawKit-Vector-Illustration-ecommerce-12.svg') }}" alt="">
          </div>
        </div>

      </div>

      <!-- kanan -->
      <div class="relative px-6 py-6 flex flex-col justify-start bg-white rounded-lg h-[33rem] shadow-xl">
        <span class="text-2xl font-semibold text-slate-800">We handle with care</span>
        <span class="text-base text-gray-500 py-4">We Always handle your order with care todelivere the experience of
          buying our product. From beginning to endis always on our supervisor</span>
        <a href="" class="mt-6 text-rose-600 underline">Learn More</a>
        <div class="absolute bottom-0 right-0 w-40 h-40 overflow-clip rounded-tl-xl">
          <img src="{{ asset('svg/DrawKit-Vector-Illustration-ecommerce-16.svg') }}" alt=""
            class="object-none object-center">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end featured section -->

<!-- chipe section -->
<div class="py-10 bg-[#F3F2F0]">
  <div class="mx-auto flex flex-col items-center max-w-6xl md:px-6 lg:px-0">
    <div class="flex flex-col md:flex-row md:justify-between items-center w-full">
      <div class="flex flex-col">
        <span class="text-5xl font-semibold text-rose-600">Clothes</span>
        <span class="text-2xl font-semibold text-slate-800 md:px-2">Under $20</span>
      </div>
      <div class="my-10 md:my-0">
        <a href="/shop/?price=20" class="px-6 py-2 bg-transparent border border-slate-800 rounded-lg hover:bg-rose-400 focus:outline-none focus:bg-rose-400 focus:ring focus:ring-rose-300
        focus:ring-opacity-50 hover:text-white">Show all</a>
      </div>
    </div>

    <livewire:cheap-section />
  </div>
</div>
<!-- end chipe section -->

<!-- limited edtion-->
<div class="bg-rose-200 py-10">
  <div class="max-w-6xl flex flex-col mx-auto">
    <span class="font-heading text-5xl pl-4 md:pl-6 md:text-9xl lg:pl-0 uppercase text-white mt-20">Limited
      edition</span>
    <span class="border-b-8 py-2 ml-6 lg:ml-0 border-rose-600  w-24"></span>
    <span class="text-xs md:text-lg md:pl-6 py-4 pl-4 max-w-lg font-medium text-slate-600">
      <span class="text-4xl font-semibold">" </span>You do not need to be great to start something. Do it now and do not
      ever put off
      because the chance may not come
      twice
    </span>

    <div class="bg-gray-100 rounded-lg mx-4 mt-10">
      <div class="grid p-6 grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

        <div class="group relative">
          <div
            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-xl overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img
              src="https://images.unsplash.com/photo-1623609163868-7e3228f7135c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1568&q=80"
              alt="Front of men&#039;s Basic Tee in black."
              class="w-full h-full object-center object-cover lg:w-full lg:h-full">
          </div>
          <button
            class="absolute z-20 px-2 py-1 rounded-lg border border-gray-400 top-0 right-0 mt-4 mr-4 hover:bg-rose-600 text-white hover:border-white"
            title="Add To Cart">
            <a href="#">+</a>
          </button>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Black</p>
            </div>
            <p class="text-2xl font-semibold text-gray-900">$35</p>
          </div>
        </div>

        <div class="group relative">
          <div
            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-xl overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img
              src="https://images.unsplash.com/photo-1623609163868-7e3228f7135c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1568&q=80"
              alt="Front of men&#039;s Basic Tee in black."
              class="w-full h-full object-center object-cover lg:w-full lg:h-full">
          </div>
          <button
            class="absolute z-20 px-2 py-1 rounded-lg border border-gray-400 top-0 right-0 mt-4 mr-4 hover:bg-rose-600 text-white hover:border-white"
            title="Add To Cart">
            <a href="#">+</a>
          </button>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Black</p>
            </div>
            <p class="text-2xl font-semibold text-gray-900">$35</p>
          </div>
        </div>

        <div class="group relative">
          <div
            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-xl overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img
              src="https://images.unsplash.com/photo-1623609163868-7e3228f7135c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1568&q=80"
              alt="Front of men&#039;s Basic Tee in black."
              class="w-full h-full object-center object-cover lg:w-full lg:h-full">
          </div>
          <button
            class="absolute z-20 px-2 py-1 rounded-lg border border-gray-400 top-0 right-0 mt-4 mr-4 hover:bg-rose-600 text-white hover:border-white"
            title="Add To Cart">
            <a href="#">+</a>
          </button>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Black</p>
            </div>
            <p class="text-2xl font-semibold text-gray-900">$35</p>
          </div>
        </div>

        <div class="group relative">
          <div
            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-xl overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img
              src="https://images.unsplash.com/photo-1623609163868-7e3228f7135c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1568&q=80"
              alt="Front of men&#039;s Basic Tee in black."
              class="w-full h-full object-center object-cover lg:w-full lg:h-full">
          </div>
          <button
            class="absolute z-20 px-2 py-1 rounded-lg border border-gray-400 top-0 right-0 mt-4 mr-4 hover:bg-rose-600 text-white hover:border-white"
            title="Add To Cart">
            <a href="#">+</a>
          </button>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Black</p>
            </div>
            <p class="text-2xl font-semibold text-gray-900">$35</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- end limited edtion-->


<!-- our blog -->
<div class="bg-[#F3F2F0]">
  <div class="max-w-6xl mx-auto grid grid-cols-1 gap-4 pt-20 pb-10 lg:grid-cols-3 md:px-6">
    <div
      class="grid-span-1 items-center lg:max-w-xs lg:items-start lg:mx-0 px-3 flex flex-col mx-auto space-y-4 dark:text-gray-300">
      <span class="text-3xl font-semibold capitalize">Our blog</span>
      <span class="text-base text-gray-400 text-center lg:text-left">Lorem ipsum dolor sit amet consectetur adipisicing
        elit.
        Facilis animi
        necessitatibus blanditiis?</span>
      <x-button><a href="{{route('articles')}}">Feed All</a></x-button>
    </div>
    <div class="col-span-2 grid grid-cols-1 md:grid-cols-3 dark:text-gray-300">

      <livewire:article.feed-views />

    </div>
  </div>
</div>
<!-- end our blog -->

@endsection

@section('script')
<script type="text/javascript">
  //carousel var
    // const slider = document.querySelector(".slider");
    // const nextBtn = document.querySelector(".next-btn");
    // const prevBtn = document.querySelector(".prev-btn");
    // const slides = document.querySelectorAll(".slide");
    // const slideIcons = document.querySelectorAll(".slide-icon");
    // const numberOfSlides = slides.length;
    // var slideNumber = 0;
    // end carousel

    // image slider button
    // nextBtn.addEventListener("click", () => {
    //     slides.forEach((slide) => {
    //         slide.classList.remove("active");
    //     });

    //     slideIcons.forEach((slideIcon) => {
    //         slideIcon.classList.remove("active");
    //     });

    //     slideNumber++;

    //   if(slideNumber > (numberOfSlides - 1)){
    //     slideNumber = 0;
    //   }

    //   slides[slideNumber].classList.add("active");
    //   slideIcons[slideNumber].classList.add("active");
    // })

    //image slider previous button
    // prevBtn.addEventListener("click", () => {
    //   slides.forEach((slide) => {
    //     slide.classList.remove("active");
    //   });
    //   slideIcons.forEach((slideIcon) => {
    //     slideIcon.classList.remove("active");
    //   });

    //   slideNumber--;

    //   if(slideNumber < 0){
    //     slideNumber = numberOfSlides - 1;
    //   }

    //   slides[slideNumber].classList.add("active");
    //   slideIcons[slideNumber].classList.add("active");
    // });

    //image slider autoplay
    // var playSlider;

    // var repeater = () => {
    // playSlider = setInterval(function(){
    //     slides.forEach((slide) => {
    //     slide.classList.remove("active");
    //     });
    //     slideIcons.forEach((slideIcon) => {
    //     slideIcon.classList.remove("active");
    //     });

    //     slideNumber++;

    //     if(slideNumber > (numberOfSlides - 1)){
    //     slideNumber = 0;
    //     }

    //     slides[slideNumber].classList.add("active");
    //     slideIcons[slideNumber].classList.add("active");
    // }, 4000);
    // }
    // repeater();

    // //stop the image slider autoplay on mouseover
    // slider.addEventListener("mouseover", () => {
    // clearInterval(playSlider);
    // });

    // //start the image slider autoplay again on mouseout
    // slider.addEventListener("mouseout", () => {
    // repeater();
    // });

    //carousel popular 
    const swiper = new Swiper('.swiper', {
      // Optional parameters
      // direction: 'vertical',
      loop: true,

      // Navigation arrows
      navigation: {
        nextEl: '.ctgBtnR',
        prevEl: '.ctgBtnL',
      },
    });

</script>
@endsection