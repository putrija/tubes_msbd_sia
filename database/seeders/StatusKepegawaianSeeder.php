<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class StatusKepegawaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_kepegawaian_guru')->insert([
            'id_status_kepegawaian' => 1,
            'ket_status_kepeg' => 'PNS'
        ]);
        DB::table('status_kepegawaian_guru')->insert([
            'id_status_kepegawaian' => 2,
            'ket_status_kepeg' => 'PPPK'
        ]);
        DB::table('status_kepegawaian_guru')->insert([
            'id_status_kepegawaian' => 3,
            'ket_status_kepeg' => 'GTY/PTY'
        ]);
        DB::table('status_kepegawaian_guru')->insert([
            'id_status_kepegawaian' => 4,
            'ket_status_kepeg' => 'Guru Honor Sekolah'
        ]);
    }
}
