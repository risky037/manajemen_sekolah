@extends('layouts.app')

@section('content')
    <h2>Data Guru</h2>
    <a href="{{ route('guru.create') }}" style="display: inline-block; margin-bottom: 10px; padding: 8px 12px; background-color: #3498db; color: white; text-decoration: none; border-radius: 4px;">Tambah Guru</a>

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead style="background-color: #f2f2f2;">
            <tr>
                <th>Nama</th>
                <th>Mata Pelajaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guru as $g)
                <tr>
                    <td>{{ $g->nama }}</td>
                    <td>{{ $g->mapel }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection