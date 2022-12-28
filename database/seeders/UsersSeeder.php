<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('guru')->insert(
        //     [
        //         'id' => 1,
        //         'id_card' => '00001',
        //         'nip' => '12345678',
        //         'nama_guru' => 'guruku',
        //         'mapel_id' => '12',
        //         'kode' => '111',
        //         'jk' => 'L',
        //         'telp' => '0920170',
        //         'hp' => '01293',
        //         'tmp_lahir' => 'medan',
        //         'tgl_lahir' => '2022-12-06',
        //         'status_kepegawaian' => 'PNS',
        //         'agama' => 'Kristen',
        //         'alamat' => 'Tembung',
        //         'rt' => 'as',
        //         'rw' => 'as',
        //         'nama_dusun' => 'as',
        //         'desa_kelurahan' => 'as',
        //         'kecamatan' => 'as',
        //         'kode_pos' => '123',
        //         'email' => 'guru1@gmail.com',
        //         'nik' => '12345678',
        //         'no_kk' => '12345678',
        //         'foto' => 'uploads/guru/35251431012020_male.jpg',
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s')
        //     ]
        // );
        // DB::table('mapel')->insert(
        //     [
        //         'id' => 1,
        //         'nama_mapel' => 'biologi',
        //         'paket_id' => '12',
        //         'kelompok' => 'A',
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s'),
        //         'deleted_at' => date('Y-m-d H:i:s')
        //     ]
        // );
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Putrija Malau',
            'email' => 'siswa1@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Siswa',
            'no_induk' => '11111',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Pak Budiman',
            'email' => 'guru1@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Guru',
            'id_card_guru' => '00001',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Kepala Sekolah',
            'email' => 'kepalasekolah@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Kepala Sekolah',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
};
