@extends('layouts.app')

@section('content')
    <h2>Tambah Data Siswa</h2>

    <form action="{{ route('siswa.store') }}" method="POST" style="max-width: 400px;">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="nama" style="display: block; margin-bottom: 5px;">Nama Siswa</label>
            <input type="text" name="nama" id="nama" required
                style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="kelas" style="display: block; margin-bottom: 5px;">Kelas</label>
            <input type="text" name="kelas" id="kelas" required
                style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
         <div style="margin-bottom: 15px;">
            <label for="kelas" style="display: block; margin-bottom: 5px;">Alamat</label>
            <input type="text" name="kelas" id="kelas" required
                style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <button type="submit"
            style="padding: 10px 16px; background-color: #2980b9; color: white; border: none; border-radius: 4px;">
            💾 Simpan
        </button>

        <a href="{{ route('siswa.index') }}"
            style="margin-left: 10px; padding: 10px 16px; background-color: #7f8c8d; color: white; border-radius: 4px; text-decoration: none;">
            ↩️ Kembali
        </a>
    </form>
@endsection
