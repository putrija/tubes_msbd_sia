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
                'no_induk' => '11111',
                'nisn' => '12345001',
                'nama_siswa' => 'Putrija Malau',
                'jk' => 'P',
                'agama' => 'Katolik',
                'telp' => '088264273141',
                'tmp_lahir' => 'Medan',
                'tgl_lahir' => '2004-07-23',
                'alamat' => 'Tembung',
                'email' => 'siswa1@gmail.com',
                'angkatan' => date('Y'),
                'foto' => 'uploads/siswa/23171022042020_female.jpg',
                'status_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('siswa')->insert(
            [
                'id' => 2,
                'no_induk' => '11112',
                'nisn' => '12345002',
                'nama_siswa' => 'Gideon Manurung',
                'jk' => 'L',
                'agama' => 'Katolik',
                'telp' => '088264273142',
                'tmp_lahir' => 'Medan',
                'tgl_lahir' => '2003-07-20',
                'alamat' => 'Simalingkat',
                'email' => 'siswa2@gmail.com',
                'angkatan' => date('Y'),
                'foto' => 'uploads/siswa/27231912072020_male.jpg',
                'status_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
