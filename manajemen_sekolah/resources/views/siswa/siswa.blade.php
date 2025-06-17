@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .btn-tambah {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 18px;
            background: linear-gradient(to right, #27ae60, #229954);
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            transition: background 0.3s ease;
        }

        .btn-tambah:hover {
            background: linear-gradient(to right, #229954, #1e8449);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #ecf0f1;
        }

        th, td {
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        @media screen and (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            thead {
                display: none;
            }

            tr {
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 6px;
                padding: 10px;
                background-color: #fff;
            }

            td {
                display: flex;
                justify-content: space-between;
                padding: 8px 10px;
                border: none;
                border-bottom: 1px solid #eee;
                font-size: 14px;
            }

            td::before {
                content: attr(data-label);
                font-weight: bold;
                color: #555;
            }
        }
    </style>

    <h2>👨‍🎓 Data Siswa</h2>
    <a href="{{ route('siswa.create') }}" class="btn-tambah">+ Tambah Siswa</a>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $s)
                <tr>
                    <td data-label="Nama">{{ $s->nama }}</td>
                    <td data-label="Kelas">{{ $s->kelas }}</td>
                    <td data-label="Alamat">{{ $s->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
