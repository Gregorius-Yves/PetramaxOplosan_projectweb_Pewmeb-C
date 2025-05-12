<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Explore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
</head>
<body class="bg-white font-sans antialiased flex flex-col min-h-screen">

    {{-- 🔹 Header --}}
    <header class="flex justify-end items-center p-4">
        <a href="{{ route('profile') }}">
            <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M5.121 17.804A12.042 12.042 0 0112 15c2.21 0 4.264.636 5.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </a>
    </header>

    {{-- 🔄 Top Image Carousel --}}
    <section class="px-4 mb-6">
        <div class="swiper mySwiper rounded-xl overflow-hidden bg-orange-100">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex justify-center items-center h-40 md:h-60">
                    <img src="{{ asset('img/placeholder.png') }}" class="object-cover w-full h-full" alt="Slide 1">
                </div>
                <div class="swiper-slide flex justify-center items-center h-40 md:h-60">
                    <img src="{{ asset('img/placeholder.png') }}" class="object-cover w-full h-full" alt="Slide 2">
                </div>
                <div class="swiper-slide flex justify-center items-center h-40 md:h-60">
                    <img src="{{ asset('img/placeholder.png') }}" class="object-cover w-full h-full" alt="Slide 3">
                </div>
            </div>
            <div class="swiper-pagination -mt-6 text-center"></div>
        </div>
    </section>

    {{-- 🌦 Cuaca Indonesia --}}
    <section class="px-4 mb-8">
        <div class="flex justify-between items-center mb-2">
            <h2 class="text-lg font-semibold text-gray-800">Cuaca Indonesia</h2>
            <a href="#" class="text-sm text-blue-600 font-medium hover:underline">See more</a>
        </div>
        <div class="swiper cuacaSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-44 h-28 bg-blue-100 rounded-lg flex items-center justify-center">
                    <img src="{{ asset('img/placeholder.png') }}" class="w-16 h-16" alt="Cuaca 1">
                </div>
                <div class="swiper-slide w-44 h-28 bg-blue-100 rounded-lg flex items-center justify-center">
                    <img src="{{ asset('img/placeholder.png') }}" class="w-16 h-16" alt="Cuaca 2">
                </div>
                <div class="swiper-slide w-44 h-28 bg-blue-100 rounded-lg flex items-center justify-center">
                    <img src="{{ asset('img/placeholder.png') }}" class="w-16 h-16" alt="Cuaca 3">
                </div>
            </div>
        </div>
    </section>

    {{-- 🔻 Bottom Navigation Bar --}}
    <nav class="border-t border-gray-200 bg-white fixed bottom-0 left-0 w-full flex justify-around py-2 z-50">
        <a href="{{ url('/explore') }}" class="flex flex-col items-center text-orange-600 font-semibold">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 2L2 7l10 5 10-5-10-5z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2 17l10 5 10-5M2 12l10 5 10-5" />
            </svg>
            <span class="text-xs">Explore</span>
        </a>
        <a href="{{ url('/categories') }}" class="flex flex-col items-center text-gray-500 hover:text-orange-600">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="text-xs">Categories</span>
        </a>
        <a href="{{ url('/map') }}" class="flex flex-col items-center text-gray-500 hover:text-orange-600">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 20l-5.447-2.724A2 2 0 013 15.382V5.618a2 2 0 01.553-1.382L9 2m0 18v-18m0 18l6-3m0-15l5.447 2.724A2 2 0 0121 8.618v9.764a2 2 0 01-.553 1.382L15 22m0-20v18" />
            </svg>
            <span class="text-xs">Map</span>
        </a>
    </nav>

    {{-- 🧠 Swiper Init --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper(".mySwiper", {
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });

            new Swiper(".cuacaSwiper", {
                slidesPerView: 2.2,
                spaceBetween: 12,
                freeMode: true,
            });
        });
    </script>
</body>
</html>

