<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSiswa = Siswa::count();
        $recentSiswa = Siswa::latest()->take(5)->get();

        return view('dashboard', compact('totalSiswa', 'recentSiswa'));
    }
}
