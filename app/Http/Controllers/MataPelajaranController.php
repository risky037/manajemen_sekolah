<?php

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $data = MataPelajaran::all();
        return view('MataPelajaran.index', compact('data'));
    }

    public function create()
    {
        return view('MataPelajaran.create');
    }

    public function store(Request $request)
    {
        MataPelajaran::create($request->all());
        return redirect()->route('MataPelajaran.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $mapel = MataPelajaran::findOrFail($id);
        return view('MataPelajaran.edit', compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        $mapel = MataPelajaran::findOrFail($id);
        $mapel->update($request->all());
        return redirect()->route('MataPelajaran.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        MataPelajaran::destroy($id);
        return redirect()->route('MataPelajaran.index')->with('success', 'Data berhasil dihapus');
    }
}
