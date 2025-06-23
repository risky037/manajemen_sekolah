<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Menampilkan daftar semua materi.
     */
    public function index()
    {
        $materi = Materi::with('mapel')->get(); // Ambil semua materi dengan relasi mapel
        return view('materi.index', compact('materi'));
    }

    /**
     * Menampilkan form untuk membuat materi baru.
     */
    public function create()
    {
        $mapel = Mapel::all(); // Untuk dropdown mata pelajaran
        return view('materi.create', compact('mapel'));
    }

    /**
     * Menyimpan materi baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'mapel_id' => 'required|exists:mapels,id'
        ]);

        Materi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'mapel_id' => $request->mapel_id,
        ]);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail satu materi (opsional).
     */
    public function show(Materi $materi)
    {
        return view('materi.show', compact('materi'));
    }

    /**
     * Menampilkan form edit untuk satu materi.
     */
    public function edit(Materi $materi)
    {
        $mapel = Mapel::all();
        return view('materi.edit', compact('materi', 'mapel'));
    }

    /**
     * Menyimpan perubahan materi ke database.
     */
    public function update(Request $request, Materi $materi)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'mapel_id' => 'required|exists:mapels,id'
        ]);

        $materi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'mapel_id' => $request->mapel_id,
        ]);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil diperbarui!');
    }

    /**
     * Menghapus materi dari database.
     */
    public function destroy(Materi $materi)
    {
        $materi->delete();
        return redirect()->route('materi.index')->with('success', 'Materi berhasil dihapus!');
    }
}
