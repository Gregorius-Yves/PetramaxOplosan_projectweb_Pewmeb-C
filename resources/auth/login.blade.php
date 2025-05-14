<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - inaRISK Web</title>
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
            <a href="{{ route('register') }}" class="text-sm font-semibold text-orange-600 hover:underline">Daftar</a>
            <a href="{{ url('/') }}" class="text-sm text-orange-600 hover:underline">Beranda</a>
        </div>
    </header>

    {{-- Konten Form Login --}}
    <main class="flex-grow flex flex-col items-center justify-center py-16 px-4">
        <div class="w-full max-w-md bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-orange-600 text-center mb-6">Masuk ke Akun Anda</h2>

            {{-- Notifikasi Error --}}
            @if ($errors->any())
                <div class="mb-4 text-red-600 text-sm text-center">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ url('/login') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                    <input type="password" name="password" id="password" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                </div>
                <div class="pt-4">
                    <button type="submit" class="w-full bg-orange-500 text-white font-semibold py-2 px-4 rounded hover:bg-orange-600">Masuk</button>
                </div>
            </form>
        </div>
      <div class="mt-8 text-center">
    <p class="text-sm text-gray-500 mb-3">Atau masuk dengan</p>
    <div class="flex justify-center space-x-4">
        {{-- Google --}}
        <a href="#" class="w-10 h-10 border border-gray-300 rounded flex items-center justify-center hover:bg-gray-100">
            <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="h-5 w-5">
        </a>

        {{-- Facebook --}}
        <a href="#" class="w-10 h-10 border border-gray-300 rounded flex items-center justify-center hover:bg-gray-100">
            <img src="https://www.svgrepo.com/show/382721/facebook.svg" alt="Facebook" class="h-5 w-5">
        </a>

        {{-- GitHub --}}
        <a href="#" class="w-10 h-10 border border-gray-300 rounded flex items-center justify-center hover:bg-gray-100">
            <img src="https://www.svgrepo.com/show/512317/github-142.svg" alt="GitHub" class="h-5 w-5">
        </a>

        {{-- Twitter --}}
         <a href="#" class="w-10 h-10 border border-gray-300 rounded flex items-center justify-center hover:bg-gray-100">
            <img src="https://www.svgrepo.com/show/475689/twitter-color.svg" alt="GitHub" class="h-5 w-5">
        </a>
    </div>
</div>
    </main>

    {{-- Footer --}}
    <footer class="text-center text-xs text-gray-400 py-6 border-t">
        &copy; {{ date('Y') }} inaRISK Project Team. Versi Web 1.0
    </footer>

</body>
</html>
