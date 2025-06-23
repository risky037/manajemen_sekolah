@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Materi Pelajaran</h2>

        @if ($errors->any())
            <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('materi.store') }}" method="POST" style="margin-top: 20px;">
            @csrf

            <div style="margin-bottom: 15px;">
                <label for="judul">Judul Materi:</label><br>
                <input type="text" name="judul" id="judul" value="{{ old('judul') }}" required
                    style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="deskripsi">Deskripsi:</label><br>
                <textarea name="deskripsi" id="deskripsi" rows="4" required style="width: 100%; padding: 8px;">{{ old('deskripsi') }}</textarea>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="mapel_id">Mata Pelajaran:</label><br>
                <select name="mapel_id" id="mapel_id" style="width: 100%; padding: 8px;">
                    <option value="">-- Pilih Mata Pelajaran --</option>
                    @foreach ($mapel as $item)
                        <option value="{{ $item->id }}" {{ old('mapel_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->nama_mapel }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit"
                style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px;">
                💾 Simpan
            </button>
            <a href="{{ route('materi.index') }}"
                style="padding: 10px 20px; background-color: #6c757d; color: white; border-radius: 5px; text-decoration: none;">
                ↩️ Kembali
            </a>
        </form>
    </div>
@endsection
