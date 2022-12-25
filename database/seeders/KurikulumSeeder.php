<?php

namespace Database\Seeders;
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
class KurikulumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kurikulum')->insert([
            'id_kurikulum' => 1,
            'nama_kurikulum' => 'Kurikulum K-13'
        ]);
        DB::table('kurikulum')->insert([
            'id_kurikulum' => 2,
            'nama_kurikulum' => 'Kurikulum Merdeka'
        ]);
    }
}
