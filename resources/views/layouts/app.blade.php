<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  @yield('head')
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</head>
@livewireStyles

<body x-data="{ darkMode : false }" class="leading-normal tracking-normal bg-gray-200">
  <section :class="darkMode ? 'dark' : '' ">

    <!-- navigasi bar -->
    <x-navbar />

    <section class="dark:bg-gray-800 bg-white">
      @yield('content')
    </section>

    <!-- footer dan navigasi bar bawah -->
    <x-footer />

  </section>
  <x-flash />

  @yield('script')
  <script type="text/javascript">
    // navbar fixed variabel
    window.onscroll = function () {
      const navbar = document.querySelector('.navbar');
      const inputbar = document.querySelector('.input');
      const fixedNav = navbar.offsetTop;

      if (window.pageYOffset > fixedNav) {
        navbar.classList.add('navbar-fixed');
        inputbar.classList.remove('shadow-md');
      } else {
        navbar.classList.remove('navbar-fixed');
        inputbar.classList.add('shadow-md');
      }
    }
  </script>
</body>
@livewireScripts

</html>