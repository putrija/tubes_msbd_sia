<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Mapel;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mapel::insert(
            [
                'id' => 1,
                'nama_mapel' => 'Pendidikan Agama Islam',
                'paket_id' => 1,
                'kelompok' => 'A',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        Mapel::insert([
            'id' => 2,
            'nama_mapel' => 'Pendidikan Agama Kristen',
            'paket_id' => 1,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 3,
            'nama_mapel' => 'Pendidikan Kewarganegaraan',
            'paket_id' => 1,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 4,
            'nama_mapel' => 'Bahasa Indonesia',
            'paket_id' => 1,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 5,
            'nama_mapel' => 'Bahasa Inggris',
            'paket_id' => 1,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 6,
            'nama_mapel' => 'Sejarah Indonesia',
            'paket_id' => 1,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 7,
            'nama_mapel' => 'Seni Budaya',
            'paket_id' => 1,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 8,
            'nama_mapel' => 'Prakarya',
            'paket_id' => 1,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 9,
            'nama_mapel' => 'Penjas',
            'paket_id' => 1,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 10,
            'nama_mapel' => 'Matematika Wajib',
            'paket_id' => 1,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 11,
            'nama_mapel' => 'Matematika Peminatan',
            'paket_id' => 2,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 12,
            'nama_mapel' => 'Biologi',
            'paket_id' => 2,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 13,
            'nama_mapel' => 'Fisika',
            'paket_id' => 2,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 14,
            'nama_mapel' => 'Kimia',
            'paket_id' => 2,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 15,
            'nama_mapel' => 'Geografi',
            'paket_id' => 3,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 16,
            'nama_mapel' => 'Sosiologi',
            'paket_id' => 3,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert([
            'id' => 17,
            'nama_mapel' => 'Ekonomi',
            'paket_id' => 3,
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Mapel::insert(
            [
                'id' => 18,
                'nama_mapel' => 'Sejarah',
                'paket_id' => 3,
                'kelompok' => 'A',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        );
    }
}
