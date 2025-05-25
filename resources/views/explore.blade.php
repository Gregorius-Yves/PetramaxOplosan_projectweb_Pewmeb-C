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
<body class="bg-white font-sans antialiased flex flex-col min-h-screen pb-24">

    {{-- Navbar --}}
    <header class="flex justify-between items-center px-6 py-4 shadow-md">
        <div class="flex items-center space-x-2">
	<a href="{{ url('/explore') }}" class="text-lg font-bold text-orange-600 hover:underline">inaRISK Web</a>
	</div>
        <!-- Tombol Akses Profil -->
        <a href="{{ route('settings') }}">
	<div class="w-9 h-9 rounded-full overflow-hidden">
    	        <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : asset('img/default-profile.png') }}" alt="Foto Profil" class="w-full h-full object-cover rounded-full">
	        </div>
	</a>
    </header>

    {{-- Top Image Carousel --}}
    <section class="px-4 mt-4 mb-6">
    <div class="relative">
        <div class="swiper mySwiper rounded-xl overflow-hidden bg-orange-100">
            <!-- ✅ Wajib: swiper-wrapper sebagai pembungkus semua swiper-slide -->
           <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="w-full h-40 md:h-60">
                        <img src="{{ asset('img/placeholder3.png') }}" class="w-full h-full object-cover object-center" alt="Slide 1">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full h-40 md:h-60">
                        <img src="{{ asset('img/placeholder4.png') }}" class="w-full h-full object-cover object-center" alt="Slide 2">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full h-40 md:h-60">
                        <img src="{{ asset('img/placeholder5.png') }}" class="w-full h-full object-cover object-center" alt="Slide 3">
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination absolute bottom-2 w-full text-center z-10"></div>

            <!-- Navigation Buttons -->
            <div class="swiper-button-prev text-orange-600"></div>
            <div class="swiper-button-next text-orange-600"></div>
        </div>
    </div>
</section>



    {{-- Cuaca Indonesia --}}
<section class="px-4 mb-8">
    <div class="flex justify-between items-center mb-2">
        <h2 class="text-lg font-bold text-black">Cuaca Indonesia</h2>
        <a href="#" class="text-sm text-blue-600 font-medium hover:underline">See more</a>
    </div>
    <div class="swiper cuacaSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide w-28 h-28 bg-blue-100 rounded-lg flex items-center justify-center overflow-hidden">
                <img src="{{ asset('img/placeholder3.png') }}" class="w-full h-full object-cover" alt="Cuaca 1" style="object-fit: cover;">
            </div>
            <div class="swiper-slide w-28 h-28 bg-blue-100 rounded-lg flex items-center justify-center overflow-hidden">
                <img src="{{ asset('img/placeholder4.png') }}" class="w-full h-full object-cover" alt="Cuaca 2" style="object-fit: cover;">
            </div>
            <div class="swiper-slide w-28 h-28 bg-blue-100 rounded-lg flex items-center justify-center overflow-hidden">
                <img src="{{ asset('img/placeholder5.png') }}" class="w-full h-full object-cover" alt="Cuaca 3" style="object-fit: cover;">
            </div>
        </div>
    </div>
</section>


    {{-- Bottom Navigation Bar --}}
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

    {{-- Swiper Init --}}
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper(".mySwiper", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
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
