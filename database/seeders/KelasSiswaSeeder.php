<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KelasSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas_siswa')->insert(
            [
                'id_kelas_siswa' => 1,
                'siswa_id' => '1',
                'kelas_id' => '1',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas_siswa')->insert(
            [
                'id_kelas_siswa' => 2,
                'siswa_id' => '2',
                'kelas_id' => '1',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
