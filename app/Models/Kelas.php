<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    // Tentukan nama tabel jika nama tabel tidak mengikuti konvensi (plural)
    // Tentukan kolom yang bisa di-assign massal
    protected $fillable = ['nama'];  // Sesuaikan dengan kolom yang ada di tabel

    public function mapels()
    {
        return $this->hasMany(Mapel::class);
    }
}
