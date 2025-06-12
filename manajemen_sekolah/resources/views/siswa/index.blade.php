<!-- resources/views/siswa/index.blade.php -->
@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
    <h2>Data Siswa</h2>
    <a href="{{ route('siswa.create') }}">Tambah Siswa</a>
    <table>
        @foreach ($siswas as $s)
            <tr>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->kelas }}</td>
            </tr>
        @endforeach
    </table>
@endsection
