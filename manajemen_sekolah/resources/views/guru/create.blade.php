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

        form {
            max-width: 500px;
            background-color: #fdfdfd;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        form div {
            margin-bottom: 18px;
        }

        label {
            font-weight: 600;
            color: #34495e;
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 14px;
            font-size: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            transition: border 0.3s;
        }

        input[type="text"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
        }

        button[type="submit"] {
            background: linear-gradient(to right, #3498db, #2980b9);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button[type="submit"]:hover {
            background: linear-gradient(to right, #2980b9, #2471a3);
        }

        @media (max-width: 600px) {
            form {
                padding: 20px;
            }

            button {
                width: 100%;
            }
        }
    </style>

    <h2>📝 Tambah Data Guru</h2>

    <form action="{{ route('guru.store') }}" method="POST">
        @csrf

        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required>
        </div>

        <div>
            <label for="mapel">Mata Pelajaran</label>
            <input type="text" name="mapel" id="mapel" required>
        </div>

        <button type="submit">💾 Simpan</button>
    </form>
@endsection
