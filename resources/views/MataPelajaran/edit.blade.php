@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Mata Pelajaran</h2>

        <form action="{{ route('mata_pelajaran.update', $mapel->id) }}" method="POST" style="max-width: 400px;">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 15px;">
                <label for="kode_mapel">Kode Mapel</label>
                <input type="text" name="kode_mapel" id="kode_mapel" value="{{ $mapel->kode_mapel }}" required
                       style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="nama_mapel">Nama Mapel</label>
                <input type="text" name="nama_mapel" id="nama_mapel" value="{{ $mapel->nama_mapel }}" required
                       style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <button type="submit"
                    style="padding: 10px 16px; background-color: #f39c12; color: white; border: none; border-radius: 4px;">
                💾 Perbarui
            </button>

            <a href="{{ route('mata_pelajaran.index') }}"
               style="margin-left: 10px; padding: 10px 16px; background-color: #7f8c8d; color: white; border-radius: 4px; text-decoration: none;">
                ↩️ Kembali
            </a>
        </form>
    </div>
@endsection
