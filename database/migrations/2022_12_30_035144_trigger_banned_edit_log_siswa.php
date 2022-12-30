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
        // trigger banned edit log siswa
        DB::unprepared('CREATE TRIGGER `banned_edit_log_siswa` BEFORE UPDATE ON `log_siswa`
        FOR EACH ROW
            IF NEW.id <> OLD.id || NEW.nama_siswa_new <> OLD.nama_siswa_new || NEW.nama_siswa_old <> OLD.nama_siswa_old || NEW.jk_new <> OLD.jk_new  || NEW.jk_old <> OLD.jk_old || NEW.tmp_lahir_new <> OLD.tmp_lahir_new || NEW.tmp_lahir_old <> OLD.tmp_lahir_old 
            || NEW.tgl_lahir_new <> OLD.tgl_lahir_new || NEW.tgl_lahir_old <> OLD.tgl_lahir_old || NEW.alamat_new <> OLD.alamat_new || NEW.alamat_old <> OLD.alamat_old || NEW.nisn_new <> OLD.nisn_new || NEW.nisn_old <> OLD.nisn_old || NEW.kelas_id_new <> OLD.kelas_id_new 
            || NEW.kelas_id_old <> OLD.kelas_id_old || NEW.telp_new <> OLD.telp_new || NEW.telp_old <> OLD.telp_old ||  NEW.status <> OLD.status  THEN 
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
        //
    }
};
