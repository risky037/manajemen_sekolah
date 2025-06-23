@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Materi</h2>

        @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 10px;">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('materi.create') }}" style="display:inline-block; margin-bottom:15px; padding:10px 15px; background:#3498db; color:white; border-radius:5px;">➕ Tambah Materi</a>

        <table border="1" width="100%" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Mata Pelajaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($materi as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->mapel->nama_mapel }}</td>
                        <td>
                            <a href="{{ route('materi.edit', $item->id) }}" style="background:#f1c40f; padding:5px 10px; color:white; border-radius:4px;">✏️ Edit</a>

                            <form action="{{ route('materi.destroy', $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus materi ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background:#e74c3c; padding:5px 10px; color:white; border:none; border-radius:4px;">🗑️ Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align:center;">Belum ada data materi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
