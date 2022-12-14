<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Jenis_ptkSeeder::class);
        $this->call(TugasTambahanSeeder::class);
        $this->call(StatusKepegawaianSeeder::class);
        $this->call(KurikulumSeeder::class);
        $this->call(MapelSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(StatusSiswaSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(TahunAjaranSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(GuruMengajarSeeder::class);
        $this->call(RuangSeeder::class);
        $this->call(JadwalSeeder::class);
        $this->call(KelasSiswaSeeder::class);
        $this->call(WaliKelasSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(PelanggaranSeeder::class);
        $this->call(RaporSeeder::class);
    }
}
