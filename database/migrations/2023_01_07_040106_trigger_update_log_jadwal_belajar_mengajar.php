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
        //update jadwal
        DB::unprepared('CREATE TRIGGER `update_log_jadwal_belajar_mengajar` AFTER UPDATE ON `jadwal_belajar_mengajar`
       FOR EACH ROW BEGIN
      
       INSERT INTO `log_jadwal_belajar_mengajar` (`guru_mengajar_id_old`, `guru_mengajar_id_new`, `ruang_id_old`, `ruang_id_new`, `kelas_id_old`, `kelas_id_new`, `hari_old`, `hari_new`, `jam_mulai_old`, `jam_mulai_new`,`jam_selesai_old`, `jam_selesai_new`, `status`)
       VALUES ( OLD.guru_mengajar_id, NEW.guru_mengajar_id, OLD.ruang_id,  NEW.ruang_id, OLD.kelas_id, NEW.kelas_id, OLD.hari,  NEW.hari, OLD.jam_mulai, NEW.jam_mulai, OLD.jam_selesai, NEW.jam_selesai, "UPDATE");
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
