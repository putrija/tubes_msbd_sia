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
        //insert jadwal
        DB::unprepared('CREATE TRIGGER `insert_log_jadwal_belajar_mengajar` AFTER UPDATE ON `jadwal_belajar_mengajar`
       FOR EACH ROW BEGIN
      
       INSERT INTO `log_jadwal_belajar_mengajar` (`guru_mengajar_id_new`, `ruang_id_new`, `kelas_id_new`, `hari_new`, `jam_mulai_new`, `jam_selesai_new`, `status`)
       VALUES ( NEW.guru_mengajar_id,  NEW.ruang_id, NEW.kelas_id,  NEW.hari, NEW.jam_mulai, NEW.jam_selesai, "INSERT");
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
