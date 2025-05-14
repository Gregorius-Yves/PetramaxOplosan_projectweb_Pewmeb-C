<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengaturan Akun</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans antialiased min-h-screen flex flex-col">

    {{-- Navbar --}}
    <header class="flex justify-between items-center px-6 py-4 bg-white shadow">
        <div class="text-orange-600 font-bold text-lg">inaRISK Web</div>
        <nav>
            <a href="/" class="text-sm text-orange-600 hover:underline">Beranda</a>
        </nav>
    </header>

    {{-- Konten --}}
    <main class="flex-grow container mx-auto p-6">
        <div class="max-w-md mx-auto bg-white p-6 shadow rounded">
            <h1 class="text-2xl font-bold text-orange-600 mb-4">Pengaturan Akun</h1>

            {{-- Foto Profil dan Nama --}}
            <div class="flex flex-col items-center mb-6">
                <img src="{{ asset('img/default-profile.png') }}" alt="Foto Profil" class="h-24 w-24 rounded-full object-cover mb-4">
                <h2 class="text-lg font-semibold text-gray-700">Nama User</h2>
                <p class="text-sm text-gray-500">user@email.com</p>
            </div>

            {{-- Tombol Edit --}}
            <div class="text-center mb-6">
                <a href="/settings/editprofile" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded text-sm">Edit Profil</a>
            </div>

            {{-- Tombol Logout --}}
            <div class="text-center">
                <a href="#" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded text-sm">Logout</a>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="text-center text-xs text-gray-400 py-6 border-t">
        &copy; {{ date('Y') }} inaRISK Project Team. Versi Web 1.0
    </footer>

</body>
</html>
