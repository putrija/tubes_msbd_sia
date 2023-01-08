<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaporSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rapor')->insert(
            [
                'id' => 1,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '1',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'tahun_ajaran_id' => '2',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        DB::table('rapor')->insert(
            [
                'id' => 2,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '2',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        DB::table('rapor')->insert(
            [
                'id' => 3,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '3',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        DB::table('rapor')->insert(
            [
                'id' => 4,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '4',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        DB::table('rapor')->insert(
            [
                'id' => 5,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '5',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        DB::table('rapor')->insert(
            [
                'id' => 6,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '7',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        DB::table('rapor')->insert(
            [
                'id' => 7,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '8',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        DB::table('rapor')->insert(
            [
                'id' => 8,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '9',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        DB::table('rapor')->insert(
            [
                'id' => 9,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '10',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        DB::table('rapor')->insert(
            [
                'id' => 10,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '12',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        DB::table('rapor')->insert(
            [
                'id' => 11,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '13',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        DB::table('rapor')->insert(
            [
                'id' => 12,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '14',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        DB::table('rapor')->insert(
            [
                'id' => 13,
                'nisn_siswa' => '12345001',
                'kelas_siswa_id' => '1',
                'mapel_id' => '15',
                'wali_kelas_id' => '1',
                'semester_id' => '1',
                'nilai_pengetahuan' => '100',
                'nilai_keterampilan' => '100',
                'predikat_pengetahuan' => 'A',
                'predikat_keterampilan' => 'A',
                'tahun_ajaran_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
