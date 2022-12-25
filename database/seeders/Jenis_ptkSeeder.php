<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Jenis_ptkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_ptk')->insert([
            'id' => 1,
            'ket_jenis_ptk' => 'Guru TIK'
        ]);
        DB::table('jenis_ptk')->insert([
            'id' => 2,
            'ket_jenis_ptk' => 'Guru Mapel'
        ]);
        DB::table('jenis_ptk')->insert([
            'id' => 3,
            'ket_jenis_ptk' => 'Guru BK'
        ]);
        DB::table('jenis_ptk')->insert([
            'id' => 4,
            'ket_jenis_ptk' => 'Guru Kelas'
        ]);
    }
}
