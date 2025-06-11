<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Struktur</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans antialiased min-h-screen flex flex-col">

<header class="flex justify-between items-center px-6 py-4 bg-white shadow">
    <div class="text-orange-600 font-bold text-lg">Admin Dashboard</div>
    <nav>
        <a href="/admin/structure/create" class="text-sm text-orange-600 hover:underline">+ Tambah Struktur</a>
    </nav>
</header>

<main class="flex-grow container mx-auto p-6">
    <h1 class="text-2xl font-bold text-orange-600 mb-4">Daftar Struktur</h1>

    @if(session('success'))
        <div class="mb-4 text-green-600 font-semibold">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded">
        <table class="w-full text-sm text-left">
            <thead class="bg-orange-100 text-orange-800">
                <tr>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Deskripsi</th>
                    <th class="px-4 py-2">Tags</th>
                    <th class="px-4 py-2 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($structures as $structure)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $structure->name }}</td>
                        <td class="px-4 py-2">{{ $structure->description }}</td>
                        <td class="px-4 py-2">{{ $structure->tags }}</td>
                        <td class="px-4 py-2 text-right">
                            {{-- Hapus --}}
                            <form action="{{ route('structure.destroy', $structure->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus struktur ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline text-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if ($structures->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center text-gray-400 py-4">Belum ada data struktur.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</main>

<footer class="text-center text-xs text-gray-400 py-6 border-t">
    &copy; {{ date('Y') }} inaRISK Project Team. Versi Web 1.0
</footer>

</body>
</html>

