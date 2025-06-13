<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Tambah Struktur</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans antialiased min-h-screen flex flex-col">

    {{-- Navbar --}}
    <header class="flex justify-between items-center px-6 py-4 bg-white shadow">
        <div class="text-orange-600 font-bold text-lg">Admin Dashboard</div>
        <nav>
            <a href="/" class="text-sm text-orange-600 hover:underline">← Kembali</a>
        </nav>
    </header>

    {{-- Konten --}}
    <main class="flex-grow container mx-auto p-6">
        <div class="max-w-lg mx-auto bg-white p-6 shadow rounded">
            <h1 class="text-2xl font-bold text-orange-600 mb-6">Tambah Struktur Baru</h1>
		<form action="{{ route('structure.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Name --}}
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Nama Struktur</label>
        <input type="text" id="name" name="name" required class="mt-1 block w-full border-gray-300 rounded shadow-sm focus:ring-orange-500 focus:border-orange-500">
    </div>

    {{-- Description --}}
    <div class="mb-4">
        <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
        <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded shadow-sm focus:ring-orange-500 focus:border-orange-500"></textarea>
    </div>

    {{-- Tags --}}
    <div class="mb-4">
        <label for="tags" class="block text-sm font-medium text-gray-700">Tags (pisahkan dengan koma)</label>
        <input type="text" id="tags" name="tags" class="mt-1 block w-full border-gray-300 rounded shadow-sm focus:ring-orange-500 focus:border-orange-500">
    </div>

    {{-- Photo --}}
    <div class="mb-6">
        <label for="photo" class="block text-sm font-medium text-gray-700">Upload Gambar Struktur</label>
        <input type="file" id="photo" name="photo" accept="image/*" class="mt-1 block w-full border-gray-300 rounded shadow-sm">
    </div>

    <div class="flex justify-end">
        <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded text-sm">
            Simpan Struktur
        </button>
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

