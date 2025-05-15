<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Categories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
</head>
<body class="bg-white font-sans antialiased pb-24">
    
    {{-- Navbar --}}
    <header class="flex justify-between items-center px-6 py-4 shadow-md">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('img/inarisk-logo.png') }}" alt="inaRISK Logo" class="h-8 w-8">
	    <a href="{{ url('/explore') }}" class="text-lg font-bold text-orange-600 hover:underline">inaRISK Web</a>
	</div>
        <!-- Tombol Akses Profil -->
    <a href="{{ route('settings') }}">
        <div class="w-9 h-9 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 1115 0v.75H4.5v-.75z" />
            </svg>
        </div>
    </a>
    </header>

    {{-- Search Bar --}}
    <div class="p-4">
        <input type="text" placeholder="Search..." class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400" />
    </div>

    {{--Category Bubble Swipe --}}
    <div class="px-4 mb-4">
        <div class="swiper categorySwiper">
            <div class="swiper-wrapper space-x-2">
                @foreach (['BENCANA ALAM', 'GEMPA BUMI', 'TSUNAMI', 'HUJAN DERAS', 'KEBAKARAN'] as $category)
                <div class="swiper-slide !w-auto">
                    <div class="px-4 py-1 rounded-full bg-orange-600 text-white text-sm font-medium text-center">
                        {{ $category }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Famous Section --}}
<div class="flex justify-between items-center px-4 mb-2">
    <h2 class="text-lg font-semibold text-gray-800">Famous</h2>
    <a href="#" class="text-sm text-orange-600 hover:underline">See more</a>
</div>
<div class="swiper famousSwiper px-4 mb-6">
    <div class="swiper-wrapper !flex !gap-4">
        @foreach ([['Earthquake', 'Place, Country'], ['Earthquake', 'Olinda, Brazil']] as $event)
        <div class="swiper-slide !w-[250px] shrink-0 bg-gray-50 rounded-xl shadow p-3">
            <div class="relative rounded-xl overflow-hidden bg-gray-800 h-32 mb-2 flex items-center justify-center">
                <span class="absolute top-2 right-2 bg-orange-600 text-white text-xs px-2 py-0.5 rounded-full">MAR 05</span>
                <img src="{{ asset('img/placeholder2.png') }}" alt="event" class="h-12 w-12 opacity-60" />
            </div>
            <div class="text-sm font-semibold">{{ $event[0] }}</div>
            <div class="text-sm text-gray-500">{{ $event[1] }}</div>
            <a href="#" class="mt-2 inline-block text-sm text-orange-600 font-medium border border-orange-600 rounded-full px-4 py-1 hover:bg-orange-600 hover:text-white transition">
                Show More
            </a>
        </div>
        @endforeach
    </div>
</div>

{{-- Recent News Section --}}
<div class="flex justify-between items-center px-4 mb-2">
    <h2 class="text-lg font-semibold text-gray-800">Recent News</h2>
    <a href="#" class="text-sm text-orange-600 hover:underline">See more</a>
</div>
<div class="swiper newsSwiper px-4">
    <div class="swiper-wrapper !flex !gap-4">
        @foreach ([['News 1', 'Recife, Brazil'], ['News 2', 'Olinda, Brazil']] as $news)
        <div class="swiper-slide !w-[250px] shrink-0 bg-gray-50 rounded-xl shadow p-3">
            <div class="relative rounded-xl overflow-hidden bg-gray-800 h-32 mb-2 flex items-center justify-center">
                <span class="absolute top-2 right-2 bg-orange-600 text-white text-xs px-2 py-0.5 rounded-full">MAR 05</span>
                <img src="{{ asset('img/placeholder1.png') }}" alt="news" class="h-12 w-12 opacity-60" />
            </div>
            <div class="text-sm font-semibold">{{ $news[0] }}</div>
            <div class="text-sm text-gray-500">{{ $news[1] }}</div>
            <a href="#" class="mt-2 inline-block text-sm text-orange-600 font-medium border border-orange-600 rounded-full px-4 py-1 hover:bg-orange-600 hover:text-white transition">
                Buy tickets
            </a>
        </div>
        @endforeach
    </div>
</div>

    {{-- Swiper Initialization --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper(".categorySwiper", {
                slidesPerView: 'auto',
                spaceBetween: 10,
                freeMode: true,
            });
            new Swiper(".famousSwiper", {
                slidesPerView: 'auto',
                spaceBetween: 12,
                freeMode: true,
            });
            new Swiper(".newsSwiper", {
                slidesPerView: 'auto',
                spaceBetween: 12,
                freeMode: true,
            });
        });
    </script>
</body>
</html>
