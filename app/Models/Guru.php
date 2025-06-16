<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    // Jika nama tabel bukan 'gurus', sebutkan eksplisit
    protected $table = 'gurus';

    // Jika tabel tidak menggunakan timestamps (created_at & updated_at)
    public $timestamps = false;

    // Tentukan kolom yang boleh diisi secara massal
    protected $fillable = [
        'nama',
        'mapel',
        // tambahkan kolom lain sesuai struktur tabel 'guru' di database
    ];
}
