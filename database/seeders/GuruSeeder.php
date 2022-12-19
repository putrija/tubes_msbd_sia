<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Guru;

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
                'id_card' => '00001',
                'nip' => '12345678',
                'nama_guru' => 'guruku',
                'mapel_id' => '1',
                'kode' => 'AAA',
                'jk' => 'L',
                'telp' => '0920170',
                'hp' => '01293',
                'tmp_lahir' => 'medan',
                'tgl_lahir' => '2022-12-06',
                'status_kepegawaian' => 'PNS',
                'agama' => 'Kristen',
                'alamat' => 'Tembung',
                'rt' => 'as',
                'rw' => 'as',
                'nama_dusun' => 'as',
                'desa_kelurahan' => 'as',
                'kecamatan' => 'as',
                'kode_pos' => '123',
                'email' => 'guru1@gmail.com',
                'nik' => '12345678',
                'no_kk' => '12345678',
                'foto' => 'uploads/guru/35251431012020_male.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
