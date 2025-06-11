<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Structure;

class StructureController extends Controller
{
    public function create()
    {
        return view('admin.structure.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'tags' => 'nullable|string',
        ]);

        Structure::create([
            'name' => $request->name,
            'description' => $request->description,
            'tags' => $request->tags,
        ]);

        return redirect()->route('structure.create')->with('success', 'Struktur berhasil ditambahkan.');
    }
}

