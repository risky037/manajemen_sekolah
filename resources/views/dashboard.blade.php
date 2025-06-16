@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Statistik Siswa -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" style="background-color: #3498db; color: white;">
                        <h4>Total Siswa</h4>
                    </div>
                    <div class="card-body">
                        <h2>{{ $totalSiswa }}</h2>
                    </div>
                </div>
            </div>

            <!-- Daftar Siswa Terbaru -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #2ecc71; color: white;">
                        <h4>Siswa Terbaru</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($recentSiswa as $siswa)
                                <li class="list-group-item">
                                    <strong>{{ $siswa->nama }}</strong> - Kelas: {{ $siswa->kelas }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
