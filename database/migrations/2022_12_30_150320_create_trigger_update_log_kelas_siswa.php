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
        ///update log kelas siswa
        DB::unprepared('CREATE TRIGGER `update_log_kelas_siswa` AFTER UPDATE ON `kelas_siswa`
        FOR EACH ROW BEGIN
       
        INSERT INTO `log_wali_kelas` (`siswa_id_old`, `siswa_id_new`, `kelas_id_old`, `kelas_id_new`, `tahun_ajaran_id_old`, `tahun_ajaran_id_new`, `status`)
        VALUES ( OLD.siswa_id, NEW.siswa_id, OLD.kelas_id, NEW.kelas_id, OLD.tahun_ajaran_id, NEW.tahun_ajaran_id, "UPDATE");
             END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_update_log_kelas_siswa');
    }
};
