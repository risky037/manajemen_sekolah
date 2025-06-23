<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    // Tentukan field yang bisa diisi (mass assignment)
    protected $fillable = [
        'judul',
        'deskripsi',
        'mapel_id',
    ];

    /**
     * Relasi: Materi milik satu Mapel
     */
    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }
}
