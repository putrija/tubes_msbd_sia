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
            'id_mapel' => 1,
            'nama_mapel' => 'Fisika',
            'kurikulum_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id_mapel' => 2,
            'nama_mapel' => 'Kimia',
            'kurikulum_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id_mapel' => 3,
            'nama_mapel' => 'Biologi',
            'kurikulum_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id_mapel' => 5,
            'nama_mapel' => 'Matematika Wajib',
            'kurikulum_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id_mapel' => 6,
            'nama_mapel' => 'Matematika Peminatan',
            'kurikulum_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id_mapel' => 7,
            'nama_mapel' => 'Sosiologi',
            'kurikulum_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
