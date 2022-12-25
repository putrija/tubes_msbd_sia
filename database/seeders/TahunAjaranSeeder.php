<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tahun_ajaran')->insert(
            [
                'id_tahun_ajaran' => 1,
                'tahun_ajaran' => '2021/2022',
                'tanggal_mulai' => '2021-07-01',
                'tanggal_berakhir' => '2022-06-01',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('tahun_ajaran')->insert(
            [
                'id_tahun_ajaran' => 2,
                'tahun_ajaran' => '2022/2023',
                'tanggal_mulai' => '2022-07-01',
                'tanggal_berakhir' => '2023-06-01',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
