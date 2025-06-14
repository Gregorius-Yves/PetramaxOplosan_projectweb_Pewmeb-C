@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold text-orange-600 mb-4">{{ $structure->name }}</h1>
    <p class="text-gray-700 mb-4">{{ $structure->description }}</p>

    @if ($structure->photo)
        <img src="{{ asset('storage/' . $structure->photo) }}" class="w-64 rounded shadow mb-4">
    @endif

    <div class="mt-2">
        <strong>Tags:</strong>
        @foreach(explode(',', $structure->tags) as $tag)
            <a href="{{ route('structure.search', ['q' => trim($tag)]) }}"
               class="text-orange-500 hover:underline mr-2">#{{ trim($tag) }}</a>
        @endforeach
    </div>
</div>
@endsection

