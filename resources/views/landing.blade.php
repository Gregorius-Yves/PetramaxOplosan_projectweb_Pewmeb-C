<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>inaRISK Web</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-sans antialiased flex flex-col min-h-screen scroll-smooth">

    {{-- Navbar --}}
    <header class="flex justify-between items-center px-6 py-4 shadow-md">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('img/inarisk-logo.png') }}" alt="inaRISK Logo" class="h-8 w-8">
            <span class="text-lg font-bold text-orange-600">inaRISK Web</span>
        </div>
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="text-sm font-semibold text-orange-600 hover:underline">Masuk</a>
            <a href="{{ route('register') }}" class="text-sm font-semibold text-white bg-orange-500 px-4 py-2 rounded hover:bg-orange-600">Daftar</a>
        </div>
    </header>

    {{-- Hero Section --}}
    <main class="flex-grow text-center px-6 pt-24 pb-16 bg-white">
        <h1 class="text-4xl md:text-5xl font-extrabold text-orange-600 mb-4">Kenali Risiko Bencana di Sekitarmu</h1>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-8">
            Platform berbasis web untuk melihat lokasi rawan bencana, melaporkan kejadian, dan menerima peringatan dini secara real-time.
        </p>
        <a href="/login" class="text-white bg-orange-500 hover:bg-orange-600 font-semibold px-6 py-3 rounded">
            Jelajahi Fitur
        </a>
    </main>

    {{-- Section Fitur --}}
    <section id="fitur" class="bg-gray-50 py-20">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-orange-600 mb-6">Fitur Unggulan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
                <div>
                    <img src="{{ asset('img/peta.svg') }}" alt="Peta Risiko" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Peta Risiko</h3>
                    <p class="text-gray-600">Lihat wilayah rawan bencana langsung dari peta interaktif.</p>
                </div>
                <div>
                    <img src="{{ asset('img/notifikasi.svg') }}" alt="Notifikasi" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Peringatan Dini</h3>
                    <p class="text-gray-600">Notifikasi otomatis saat ada ancaman bencana di wilayahmu.</p>
                </div>
                <div>
                    <img src="{{ asset('img/laporan.svg') }}" alt="Laporan" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Laporan Masyarakat</h3>
                    <p class="text-gray-600">Laporkan kejadian secara langsung untuk membantu pengguna lain.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="text-center text-xs text-gray-400 py-6 border-t mt-auto">
        &copy; {{ date('Y') }} inaRISK Project Team. Versi Web 1.0
    </footer>

</body>
</html>