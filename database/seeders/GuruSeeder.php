<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guru')->insert(
            [
                'id' => 1,
                'id_card_guru' => '00001',
                'nama_guru' => 'Pak Budiman',
                'kode_guru' => 'AAA',
                'nip' => '12345678',
                'nuptk' => '12345678',
                'status_kepegawaian_id' => '1',
                'jenis_ptk_id' => '2',
                'jk' => 'L',
                'email' => 'guru1@gmail.com',
                'agama' => 'Kristen',
                'telp' => '0920170',
                'hp' => '01293',
                'tmp_lahir' => 'medan',
                'tgl_lahir' => '2022-12-06',
                'nik' => '12345678',
                'no_kk' => '12345678',
                'alamat' => 'Tembung',
                'rt' => 'as',
                'rw' => 'as',
                'nama_dusun' => 'as',
                'desa_kelurahan' => 'as',
                'kecamatan' => 'as',
                'kode_pos' => '123',

                'foto' => 'uploads/guru/35251431012020_male.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
