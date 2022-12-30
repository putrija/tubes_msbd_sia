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
       //insert log kelas siswa
       DB::unprepared('CREATE TRIGGER `insert_log_kelas_siswa` AFTER UPDATE ON `kelas_siswa`
       FOR EACH ROW BEGIN
      
       INSERT INTO `log_kelas_siswa` (`siswa_id_new`, `kelas_id_new`, `tahun_ajaran_id_new`, `status`)
       VALUES ( NEW.siswa_id,  NEW.kelas_id,  NEW.tahun_ajaran_id, "INSERT");
            END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_insert_log_kelas_siswa');
    }
};
