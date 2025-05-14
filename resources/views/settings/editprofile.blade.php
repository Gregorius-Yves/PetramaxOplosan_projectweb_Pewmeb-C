<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Profil</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans antialiased min-h-screen flex flex-col">

    {{-- Navbar --}}
    <header class="flex justify-between items-center px-6 py-4 bg-white shadow">
        <div class="text-orange-600 font-bold text-lg">inaRISK Web</div>
        <nav>
            <a href="/settings" class="text-sm text-orange-600 hover:underline">← Kembali</a>
        </nav>
    </header>

    {{-- Konten --}}
    <main class="flex-grow container mx-auto p-6">
        <div class="max-w-md mx-auto bg-white p-6 shadow rounded">
            <h1 class="text-2xl font-bold text-orange-600 mb-6">Edit Profil</h1>

            <form action="#" method="POST">
                @csrf
                {{-- Username --}}
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username" class="mt-1 block w-full border-gray-300 rounded shadow-sm focus:ring-orange-500 focus:border-orange-500" placeholder="Masukkan username baru">
                </div>

                {{-- Email --}}
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded shadow-sm focus:ring-orange-500 focus:border-orange-500" placeholder="Masukkan email baru">
                </div>

                {{-- Password --}}
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password Baru</label>
                    <input type="password" id="password" name="password" class="mt-1 block w-full border-gray-300 rounded shadow-sm focus:ring-orange-500 focus:border-orange-500" placeholder="Masukkan password baru">
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded text-sm">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="text-center text-xs text-gray-400 py-6 border-t">
        &copy; {{ date('Y') }} inaRISK Project Team. Versi Web 1.0
    </footer>

</body>
</html>
