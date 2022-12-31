<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaliKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wali_kelas')->insert([
            'id' => 1,
            'guru_id' => '1',
            'kelas_id' => '1',
            'tahun_ajaran_id' => '2'
        ]);
        DB::table('wali_kelas')->insert([
            'id' => 2,
            'guru_id' => '2',
            'kelas_id' => '2',
            'tahun_ajaran_id' => '2'
        ]);
    }
}
