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
            'name' => 'Bu Mawar',
            'email' => 'guru2@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Guru',
            'id_card_guru' => '00002',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'name' => 'Cikgu Besar',
            'email' => 'guru3@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Kepala Sekolah',
            'id_card_guru' => '00003',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 6,
            'name' => 'BK',
            'email' => 'bk@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'BK',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
};
