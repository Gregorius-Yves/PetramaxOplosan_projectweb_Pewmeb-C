@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-xl font-bold mb-4">Cari Struktur</h1>

    <form action="{{ route('structure.search') }}" method="GET" class="mb-6">
        <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari berdasarkan tag, judul, atau deskripsi"
               class="border px-4 py-2 w-full rounded shadow-sm">
    </form>

    @if($structures->count())
        @foreach($structures as $structure)
            <div class="bg-white p-4 mb-4 rounded shadow">
                <h2 class="text-lg font-bold text-orange-600">
                    <a href="{{ route('structure.show', $structure->id) }}">
                        {{ $structure->name }}
                    </a>
                </h2>
                <p class="text-sm text-gray-600 mt-1">
                    {{ \Illuminate\Support\Str::limit($structure->description, 100) }}
                </p>
            </div>
        @endforeach
    @else
        <p class="text-gray-500">Tidak ada struktur ditemukan.</p>
    @endif
</div>
@endsection

