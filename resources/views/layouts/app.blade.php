<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
            transition: 0.2s;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

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
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Dashboard</h2>
        <a href="{{ route('dashboard') }}">🏠 Beranda</a>
        <a href="{{ route('guru.index') }}">👨‍🏫 Guru</a>
        <a href="{{ route('siswa.index') }}">👨‍🎓 Siswa</a>
        <a href="{{ route('kelas.index') }}">🏫 Kelas</a>
        <a href="{{ route('mapel.index') }}">📚 Mata Pelajaran</a>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            🚪 Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
