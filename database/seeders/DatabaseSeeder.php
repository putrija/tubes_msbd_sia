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
        $this->call(HariSeeder::class);
        $this->call(PaketSeeder::class);
        $this->call(RuangSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
