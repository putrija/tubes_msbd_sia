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
        DB::table('jadwal_belajar_mengajar')->insert(
            [
                'id' => 1,
                'guru_mengajar_id' => '1',
                'kelas_id' => '1',
                'ruang_id' => '1',
                'hari' => 'Senin',
                'jam_mulai' => '07:00',
                'jam_selesai' => '09:00',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
