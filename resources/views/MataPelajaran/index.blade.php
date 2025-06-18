@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 style="margin-bottom: 20px;">Daftar Mata Pelajaran</h2>

        {{-- Notifikasi sukses --}}
        @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tombol tambah --}}
        <a href="{{ route('mapel.create') }}"
           style="display: inline-block; margin-bottom: 20px; padding: 10px 16px; background-color: #3498db; color: white; border-radius: 5px; text-decoration: none;">
            ➕ Tambah Mata Pelajaran
        </a>

        {{-- Tabel Data --}}
        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
            <thead style="background-color: #f2f2f2;">
                <tr>
                    <th>No</th>
                    <th>Kode Mapel</th>
                    <th>Nama Mapel</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $mapel)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mapel->kode_mapel }}</td>
                        <td>{{ $mapel->nama_mapel }}</td>
                        <td>
                            <a href="{{ route('mapel.edit', $mapel->id) }}"
                               style="padding: 5px 10px; background-color: #f39c12; color: white; border-radius: 4px; text-decoration: none;">
                                ✏️ Edit
                            </a>

                            <form action="{{ route('mapel.destroy', $mapel->id) }}" method="POST"
                                  style="display: inline-block;"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        style="padding: 5px 10px; background-color: #e74c3c; color: white; border: none; border-radius: 4px;">
                                    🗑️ Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align: center;">Tidak ada data mata pelajaran</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
