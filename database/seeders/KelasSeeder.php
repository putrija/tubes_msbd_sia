<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //KELAS 10
        DB::table('kelas')->insert(
            [
                'id' => 1,
                'nama_kelas' => '10 IPA 1',
                'ket_kelas' => '10',
                'jurusan_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 2,
                'nama_kelas' => '10 IPA 2',
                'ket_kelas' => '10',
                'jurusan_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 3,
                'nama_kelas' => '10 IPA 3',
                'ket_kelas' => '10',
                'jurusan_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 4,
                'nama_kelas' => '10 IPS 1',
                'ket_kelas' => '10',
                'jurusan_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 5,
                'nama_kelas' => '10 IPS 2',
                'ket_kelas' => '10',
                'jurusan_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 6,
                'nama_kelas' => '10 IPS 3',
                'ket_kelas' => '10',
                'jurusan_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        // KELAS 11
        DB::table('kelas')->insert(
            [
                'id' => 7,
                'nama_kelas' => '11 IPA 1',
                'ket_kelas' => '11',
                'jurusan_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 8,
                'nama_kelas' => '11 IPA 2',
                'ket_kelas' => '11',
                'jurusan_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 9,
                'nama_kelas' => '11 IPA 3',
                'ket_kelas' => '11',
                'jurusan_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 10,
                'nama_kelas' => '11 IPS 1',
                'ket_kelas' => '11',
                'jurusan_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 11,
                'nama_kelas' => '11 IPS 2',
                'ket_kelas' => '11',
                'jurusan_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 12,
                'nama_kelas' => '11 IPS 3',
                'ket_kelas' => '11',
                'jurusan_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        //KELAS 12
        DB::table('kelas')->insert(
            [
                'id' => 13,
                'nama_kelas' => '12 IPA 1',
                'ket_kelas' => '12',
                'jurusan_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 14,
                'nama_kelas' => '12 IPA 2',
                'ket_kelas' => '12',
                'jurusan_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 15,
                'nama_kelas' => '12 IPA 3',
                'ket_kelas' => '12',
                'jurusan_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 16,
                'nama_kelas' => '12 IPS 1',
                'ket_kelas' => '12',
                'jurusan_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 17,
                'nama_kelas' => '12 IPS 2',
                'ket_kelas' => '12',
                'jurusan_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        DB::table('kelas')->insert(
            [
                'id' => 18,
                'nama_kelas' => '12 IPS 3',
                'ket_kelas' => '12',
                'jurusan_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
