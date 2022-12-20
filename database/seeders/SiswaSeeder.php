<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert(
            [
                'id' => 1,
                'no_induk' => '00001',
                'nisn' => '12345678',
                'nama_siswa' => 'Putrija Malau',
                'jk' => 'P',
                'agama' => 'Katolik',
                'telp' => '088264273141',
                'tmp_lahir' => 'medan',
                'tgl_lahir' => '2004-07-23',
                'alamat' => 'Tembung',
                'email' => 'siswa1@gmail.com',
                'foto' => 'uploads/siswa/23171022042020_female.jpg',
                'kelas_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
