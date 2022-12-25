<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 40; $i++) {
            if ($i < 10) {
                $r = '0' . $i;
            } else {
                $r = $i;
            }
            DB::table('ruang')->insert([
                'id_ruang' => $i,
                'nama_ruang' => 'Ruang ' . $r,
                'jenis_ruang' => 'Kelas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            // DB::table('ruang')->insert([
            //     'id_ruang' => ,
            //     'nama_ruang' => 'Ruang ',
            //     'jenis_ruang' => 'Kelas',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s')
            // ]);
        }
    }
}
