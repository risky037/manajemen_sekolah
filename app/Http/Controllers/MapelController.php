<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $data = Mapel::all();
        return view('mapel.index', compact('data'));
    }

    public function create()
    {
        return view('mapel.create');
    }

    public function store(Request $request)
    {
        Mapel::create($request->all());
        return redirect()->route('mapel.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $mapel = Mapel::findOrFail($id);
        return view('mapel.edit', compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        $mapel = Mapel::findOrFail($id);
        $mapel->update($request->all());
        return redirect()->route('mapel.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Mapel::destroy($id);
        return redirect()->route('mapel.index')->with('success', 'Data berhasil dihapus');
    }
}
