<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        DB::table('mapel')->insert([
            'id' => 1,
            'nama_mapel' => 'Fisika',
            'paket_id' => '2',
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 2,
            'nama_mapel' => 'Kimia',
            'paket_id' => '2',
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 3,
            'nama_mapel' => 'Biologi',
            'paket_id' => '2',
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 4,
            'nama_mapel' => 'Matematika Wajib',
            'paket_id' => '4',
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 5,
            'nama_mapel' => 'Matematika Peminatan',
            'paket_id' => '2',
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 6,
            'nama_mapel' => 'Sosiologi',
            'paket_id' => '3',
            'kelompok' => 'A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
