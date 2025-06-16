@extends('layouts.app')

@section('content')
    <h2>Data Siswa</h2>
    <a href="{{ route('siswa.create') }}"
        style="padding: 8px 12px; background-color: #27ae60; color: white; border-radius: 4px; text-decoration: none;">
        ➕ Tambah Siswa
    </a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead style="background-color: #f2f2f2;">
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $s)
                <tr>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
