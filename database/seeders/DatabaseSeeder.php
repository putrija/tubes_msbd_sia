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
        $this->call(PaketSeeder::class);
        $this->call(RuangSeeder::class);
        $this->call(MapelSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(JadwalSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
