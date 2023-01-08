<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggaran')->insert([
            'id' => 1,
            'siswa_id' => 1,
            'ket_pelanggaran' => 'Makan di saat jam Pelajaran',
            'tanggal_pelanggaran' => '2023-01-08',
            'sanksi' => 'Membersihkan Toilet Wanita Lantai 1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pelanggaran')->insert([
            'id' => 2,
            'siswa_id' => 2,
            'ket_pelanggaran' => 'Bermain HP di saat jam Pelajaran',
            'tanggal_pelanggaran' => '2023-01-08',
            'sanksi' => 'Membersihkan Toilet Pria Lantai 1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
