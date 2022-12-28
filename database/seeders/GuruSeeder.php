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
        DB::table('guru')->insert(
            [
                'id' => 2,
                'id_card_guru' => '00002',
                'nama_guru' => 'Ibu Mawar',
                'kode_guru' => 'BBB',
                'nip' => '1234567123',
                'nuptk' => '1234567123',
                'status_kepegawaian_id' => '1',
                'jenis_ptk_id' => '2',
                'jk' => 'P',
                'email' => 'guru2@gmail.com',
                'agama' => 'Katolik',
                'telp' => '0810783770',
                'hp' => '08365373',
                'tmp_lahir' => 'medan',
                'tgl_lahir' => '1975-12-10',
                'nik' => '123456123',
                'no_kk' => '1234567123',
                'alamat' => 'Simalingkar',
                'rt' => 'dd',
                'rw' => 'dd',
                'nama_dusun' => 'dd',
                'desa_kelurahan' => 'dd',
                'kecamatan' => 'dd',
                'kode_pos' => '234',

                'foto' => 'uploads/guru/23171022042020_female.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('guru')->insert(
            [
                'id' => 3,
                'id_card_guru' => '00003',
                'nama_guru' => 'Cikgu Besar',
                'kode_guru' => 'CCC',
                'nip' => '123456456',
                'nuptk' => '123456456',
                'status_kepegawaian_id' => '1',
                'jenis_ptk_id' => '2',
                'jk' => 'P',
                'email' => 'guru2@gmail.com',
                'agama' => 'Katolik',
                'telp' => '081078388',
                'hp' => '08005373',
                'tmp_lahir' => 'Malaysia',
                'tgl_lahir' => '1975-12-10',
                'nik' => '123456456',
                'no_kk' => '123456456',
                'alamat' => 'marelan',
                'rt' => 'gg',
                'rw' => 'gg',
                'nama_dusun' => 'gg',
                'desa_kelurahan' => 'gg',
                'kecamatan' => 'gg',
                'kode_pos' => '2346',

                'foto' => 'uploads/guru/cikgu_besar.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
