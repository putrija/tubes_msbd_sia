<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER trigger_pembagian_kelas AFTER INSERT ON `kelas_siswa` FOR EACH ROW
                BEGIN
                   UPDATE `siswa` SET `kelas_id` = NEW.kelas_id WHERE ( `id` = NEW.siswa_id );
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
