<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TugasTambahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tugas_tambahan_guru')->insert([
            'id' => 1,
            'ket_tugas_tambahan' => 'Wakil Kepala Sekolah'
        ]);
        DB::table('tugas_tambahan_guru')->insert([
            'id' => 2,
            'ket_tugas_tambahan' => 'Pembina Ekstrakurikuler'
        ]);
        DB::table('tugas_tambahan_guru')->insert([
            'id' => 3,
            'ket_tugas_tambahan' => 'Bendahara BOS/BOP'
        ]);
        DB::table('tugas_tambahan_guru')->insert([
            'id' => 4,
            'ket_tugas_tambahan' => 'Kepala Laboratorium'
        ]);
    }
}
