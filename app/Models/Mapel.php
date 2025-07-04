<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = ['kode_mapel', 'nama_mapel'];

    public function materis()
    {
        return $this->hasMany(Materi::class);
    }
     public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
