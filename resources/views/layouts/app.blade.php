<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset dasar */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            height: 100vh;
            background-color: #f5f5f5;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
        }

        .sidebar h2 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 22px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 8px;
            border-radius: 4px;
            transition: background-color 0.2s;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        /* Main content */
        .main-content {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
        }

        .topbar {
            background-color: #ecf0f1;
            padding: 15px;
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
        }

        /* Judul Umum */
        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        /* Form */
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

        /* Responsif */
        @media (max-width: 600px) {
            form {
                padding: 20px;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h2>Dashboard</h2>
        <a href="{{ route('dashboard') }}">🏠 Beranda</a>
        <a href="{{ route('guru.index') }}">👨‍🏫 Guru</a>
        <a href="{{ route('siswa.index') }}">👨‍🎓 Siswa</a>
        <a href="#{{-- route('kelas.index') --}}">🏫 Kelas</a>
        <a href="#{{-- route('mapel.index') --}}">📚 Mata Pelajaran</a>
        <a href="#{{-- route('logout') --}}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            🚪 Logout
        </a>
        <form id="logout-form" action="# {{-- route('logout') --}}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    <div class="main-content">
        <div class="topbar">
            <h3>Selamat Datang di Dashboard Sekolah</h3>
        </div>

        @yield('content')
    </div>

</body>

</html>
