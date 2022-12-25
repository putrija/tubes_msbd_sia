<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_siswa')->insert(
            [
                'id_status_siswa' => 1,
                'ket_status' => 'Aktif',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('status_siswa')->insert(
            [
                'id_status_siswa' => 2,
                'ket_status' => 'Lulus',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('status_siswa')->insert(
            [
                'id_status_siswa' => 3,
                'ket_status' => 'Drop Out',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('status_siswa')->insert(
            [
                'id_status_siswa' => 4,
                'ket_status' => 'Pindah',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
