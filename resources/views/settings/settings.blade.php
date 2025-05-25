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
            <a href="/explore" class="text-sm text-orange-600 hover:underline">Beranda</a>
        </nav>
    </header>

    {{-- Konten --}}
    <main class="flex-grow container mx-auto p-6 flex flex-col items-center">

        {{-- Kotak Pengaturan Akun --}}
        <div class="max-w-md w-full bg-white p-6 shadow rounded mb-8">
            <h1 class="text-2xl font-bold text-orange-600 mb-4">Pengaturan Akun</h1>

            <div class="flex flex-col items-center mb-6">
		<img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : asset('img/default-profile.png') }}"
     alt="Foto Profil"
     class="h-24 w-24 rounded-full object-cover mb-4">
		<h2 class="text-lg font-semibold text-gray-700">{{Auth::user()->name}}</h2>
		<p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>    
	</div>

    <div class="text-center mb-4">
        <a href="/settings/editprofile" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded text-sm">Edit Profil</a>
    </div>
	
    <div class="text-center">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded text-sm">
            Logout
        </button>
    </form>
    
    <form action="{{ route('profile.image.update') }}" method="POST" enctype="multipart/form-data" class="flex flex-col items-center space-y-2 mt-4">
            @csrf

            <label for="profile_image" class="cursor-pointer bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded text-sm">
                Pilih Gambar Profil
            </label>
            <input type="file" name="profile_image" id="profile_image" class="hidden" required>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded text-sm">
                Upload Gambar
            </button>
        </form>
    </div>
	    


        {{-- Tombol Tambahan di Luar Kotak --}}
        <div class="flex flex-col space-y-4 w-full max-w-md">
            <a href="#" class="block bg-white shadow px-4 py-3 rounded text-center text-sm text-gray-700 hover:bg-gray-100">
                Privacy and Security
            </a>
            <a href="#" class="block bg-white shadow px-4 py-3 rounded text-center text-sm text-gray-700 hover:bg-gray-100">
                Help and Support
            </a>
            <a href="{{ route('feedback') }}" class="block bg-white shadow px-4 py-3 rounded text-center text-sm text-gray-700 hover:bg-gray-100">
                Feedback
            </a>
        </div>

    </main>

    {{-- Footer --}}
    <footer class="text-center text-xs text-gray-400 py-6 border-t">
        &copy; {{ date('Y') }} inaRISK Project Team. Versi Web 1.0
    </footer>

</body>
</html>
