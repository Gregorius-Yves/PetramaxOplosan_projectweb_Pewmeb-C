<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>inaRISK Web</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-sans antialiased flex flex-col min-h-screen">

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

    {{-- Konten Utama --}}
    <main class="flex-grow flex flex-col items-center justify-center text-center py-20 px-4">
        <h1 class="text-4xl md:text-5xl font-extrabold text-orange-600 mb-4">Kenali Risiko Bencana di Sekitarmu</h1>
        <p class="text-gray-600 text-lg max-w-xl mb-8">
            Platform berbasis web untuk melihat lokasi rawan bencana, melaporkan kejadian, dan menerima peringatan dini secara real-time.
        </p>
    </main>

    {{-- Footer selalu di bawah --}}
    <footer class="text-center text-xs text-gray-400 py-6 border-t">
        &copy; {{ date('Y') }} inaRISK Project Team. Versi Web 1.0
    </footer>

</body>
</html>
