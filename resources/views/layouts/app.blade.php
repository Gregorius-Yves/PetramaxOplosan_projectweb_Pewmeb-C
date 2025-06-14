<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Struktur')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans antialiased min-h-screen flex flex-col">

    <header class="flex justify-between items-center px-6 py-4 bg-white shadow">
        <div class="text-orange-600 font-bold text-lg">inaRISK Web</div>
        <nav>
            <a href="/" class="text-sm text-orange-600 hover:underline">Beranda</a>
            <a href="{{ route('structure.search') }}" class="ml-4 text-sm text-orange-600 hover:underline">Cari Struktur</a>
        </nav>
    </header>

    <main class="flex-grow container mx-auto p-6">
        @yield('content')
    </main>

    <footer class="text-center text-xs text-gray-400 py-6 border-t">
        &copy; {{ date('Y') }} inaRISK Project Team. Versi Web 1.0
    </footer>

</body>
</html>

