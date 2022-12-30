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
        // trigger banned edit log kelas siswa
       DB::unprepared('CREATE TRIGGER `banned_edit_log_kelas_siswa` BEFORE UPDATE ON `log_kelas_siswa`
       FOR EACH ROW
           IF NEW.siswa_id_new <> OLD.siswa_id_new || NEW.siswa_id_old <> OLD.siswa_id_old
           || NEW.kelas_id_new <> OLD.kelas_id_new || NEW.kelas_id_old <> OLD.kelas_id_old 
           || NEW.tahun_ajaran_id_new <> OLD.tahun_ajaran_id_new || NEW.tahun_ajaran_id_old <> OLD.tahun_ajaran_id_old 
           ||  NEW.status <> OLD.status  THEN 
       SIGNAL SQLSTATE "45000" SET MESSAGE_TEXT = "Field ini tidak dapat diubah!"; 
       END IF
       ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_banned_edit_log_kelas_siswa');
    }
};
