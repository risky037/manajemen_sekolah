@extends('layouts.app')

@section('content')
    <h2>Tambah Data Guru</h2>

    <form action="{{ route('guru.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label><br>
            <input type="text" name="nama" required>
        </div>

        <div>
            <label for="mapel">Mata Pelajaran:</label><br>
            <input type="text" name="mapel" required>
        </div>

        <button type="submit" style="margin-top: 10px;">Simpan</button>
    </form>
@endsection
