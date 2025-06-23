<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mapels')->insert([
            ['nama_mapel' => 'Matematika'],
            ['nama_mapel' => 'PKN'],
            ['nama_mapel' => 'Bahasa Inggris'],
            ['nama_mapel' => 'Bahasa Indonesia'],
            ['nama_mapel' => 'Biologi'],
            ['nama_mapel' => 'Fisika'],
            ['nama_mapel' => 'Kimia'],
            ['nama_mapel' => 'Sejarah'],
            ['nama_mapel' => 'Seni Budaya'],
            ['nama_mapel' => 'Olahraga'],
            ['nama_mapel' => 'Ekonomi'],
            ['nama_mapel' => 'Geografi'],
            ['nama_mapel' => 'Sosiologi'],
            ['nama_mapel' => 'TIK'],
            ['nama_mapel' => 'Prakarya'],
            ['nama_mapel' => 'Agama Islam'],
            ['nama_mapel' => 'Agama Kristen'],
            ['nama_mapel' => 'Agama Katolik'],
            ['nama_mapel' => 'Agama Hindu'],
            ['nama_mapel' => 'Agama Buddha'],
            ['nama_mapel' => 'Agama Konghucu'],
            ['nama_mapel' => 'Bahasa Jawa'],
            ['nama_mapel' => 'Bahasa Sunda'],
            ['nama_mapel' => 'Bahasa Arab'],
            ['nama_mapel' => 'Kewirausahaan'],
            ['nama_mapel' => 'Pramuka'],
            ['nama_mapel' => 'Pendidikan Jasmani'],
            ['nama_mapel' => 'Pendidikan Agama'],
            ['nama_mapel' => 'Pendidikan Pancasila'],
        ]);
    }
}
