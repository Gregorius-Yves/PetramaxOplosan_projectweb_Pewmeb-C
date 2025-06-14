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
    $data = $request->validate([
        'name' => 'required|string',
        'description' => 'nullable|string',
        'tags' => 'nullable|string',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('photo')) {
        $data['photo'] = $request->file('photo')->store('structures', 'public');
    }

    Structure::create($data);

    return redirect()->route('structure.index')->with('success', 'Struktur berhasil disimpan.');
}

    public function index()
    {
    	$structures = \App\Models\Structure::latest()->get();
    	return view('admin.structure.index', compact('structures'));
    }

    public function destroy($id)
   {
   	$structure = \App\Models\Structure::findOrFail($id);
    	$structure->delete();

    	return redirect()->route('structure.index')->with('success', 'Struktur berhasil dihapus.');
}

	public function search(Request $request)
{
    $query = $request->input('q'); // from ?q=...
    
    $structures = Structure::query();

    if ($query) {
        $structures = $structures->where('name', 'LIKE', "%{$query}%")
                                 ->orWhere('tags', 'LIKE', "%{$query}%")
                                 ->orWhere('description', 'LIKE', "%{$query}%");
    }

    return view('structures.search', [
        'structures' => $structures->get(),
        'query' => $query
    ]);
}

    public function show($id)
{
    $structure = Structure::findOrFail($id);
    return view('structures.show', compact('structure'));
}


}


