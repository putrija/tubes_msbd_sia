<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal')->insert(
            [
                'id' => 1,
                'hari' => 'Senin',
                'kelas_id' => '1',
                'mapel_id' => '1',
                'guru_id' => '1',
                'jam_mulai' => '07:00',
                'jam_selesai' => '09:00',
                'ruang_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
