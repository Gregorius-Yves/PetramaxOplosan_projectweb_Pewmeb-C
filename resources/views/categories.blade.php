<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Categories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-white font-sans antialiased pb-24">

    {{-- Navbar --}}
    <header class="flex justify-between items-center px-6 py-4 shadow-md">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('img/inarisk-logo.png') }}" alt="inaRISK Logo" class="h-8 w-8">
            <a href="{{ url('/explore') }}" class="text-lg font-bold text-orange-600 hover:underline">inaRISK Web</a>
        </div>
        <a href="{{ route('settings') }}">
            <div class="w-9 h-9 rounded-full overflow-hidden">
    	        <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : asset('img/default-profile.png') }}" alt="Foto Profil" class="w-full h-full object-cover rounded-full">
	        </div>
        </a>
    </header>

    {{-- Search Bar --}}
    <div class="p-4">
        <input type="text" placeholder="Search..." class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400" />
    </div>

    {{-- Category Bubble Swipe --}}
    <div class="px-4 mb-4">
        <div class="swiper categorySwiper cursor-grab">
            <div class="swiper-wrapper">
                @foreach ([
                    'BENCANA ALAM', 'GEMPA BUMI', 'TSUNAMI', 'HUJAN DERAS', 'KEBAKARAN',
                    'BANJIR', 'LONGSOR', 'CUACA EKSTREM', 'GUNUNG API',
                    'GELOMBANG PANAS', 'ANGIN KENCANG', 'KEKERINGAN', 'GELOMBANG TINGGI'
                ] as $category)
                @php
                $isActive = request('type') === $category;
                @endphp
                <div class="swiper-slide !w-auto">
                    <a href="{{ url('/categories?type=' . urlencode($category)) }}"
                        class="block px-4 py-1 rounded-full text-sm font-medium text-center border transition
              {{ $isActive 
                ? 'bg-white text-orange-600 border-orange-600' 
                : 'bg-orange-600 text-white border-transparent hover:bg-orange-700' }}">
                        {{ $category }}
                    </a>
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
        <div class="swiper-wrapper">
            @foreach ([['Earthquake', 'Place, Country'], ['Earthquake', 'Olinda, Brazil']] as $event)
            <div class="swiper-slide w-full">
                <div class="bg-gray-50 rounded-xl shadow p-4">
                    <div class="relative rounded-xl overflow-hidden bg-gray-800 h-56 mb-2 flex items-center justify-center">
                        <span class="absolute top-2 right-2 bg-orange-600 text-white text-xs px-2 py-0.5 rounded-full">MAR 05</span>
                        <img src="{{ asset('img/placeholder2.png') }}" alt="event" class="w-full h-full object-cover" />
                    </div>
                    <div class="text-base font-semibold">{{ $event[0] }}</div>
                    <div class="text-sm text-gray-500">{{ $event[1] }}</div>
                    <a href="#" class="mt-2 inline-block text-sm text-orange-600 font-medium border border-orange-600 rounded-full px-4 py-1 hover:bg-orange-600 hover:text-white transition">
                        Show More
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Recent News Section --}}
    <div class="flex justify-between items-center px-4 mb-2">
        <h2 class="text-lg font-semibold text-gray-800">Recent News</h2>
        <a href="#" class="text-sm text-orange-600 hover:underline">See more</a>
    </div>
    <div class="swiper recentSwiper px-4">
        <div class="swiper-wrapper">
            @foreach ([['News 1', 'Recife, Brazil'], ['News 2', 'Olinda, Brazil']] as $news)
            <div class="swiper-slide w-full">
                <div class="bg-gray-50 rounded-xl shadow p-4">
                    <div class="relative rounded-xl overflow-hidden bg-gray-800 h-56 mb-2 flex items-center justify-center">
                        <span class="absolute top-2 right-2 bg-orange-600 text-white text-xs px-2 py-0.5 rounded-full">MAR 05</span>
                        <img src="{{ asset('img/placeholder1.png') }}" alt="news" class="w-full h-full object-cover" />
                    </div>
                    <div class="text-base font-semibold">{{ $news[0] }}</div>
                    <div class="text-sm text-gray-500">{{ $news[1] }}</div>
                    <a href="#" class="mt-2 inline-block text-sm text-orange-600 font-medium border border-orange-600 rounded-full px-4 py-1 hover:bg-orange-600 hover:text-white transition">
                        Buy tickets
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper(".categorySwiper", {
                slidesPerView: 'auto',
                spaceBetween: 10,
                freeMode: true,
            });

            new Swiper(".famousSwiper", {
                slidesPerView: 1,
                spaceBetween: 16,
            });

            new Swiper(".recentSwiper", {
                slidesPerView: 1,
                spaceBetween: 16,
            });
        });
    </script>
</body>

</html>
