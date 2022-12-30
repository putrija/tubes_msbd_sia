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
       // trigger banned edit log wali kelas
       DB::unprepared('CREATE TRIGGER `banned_edit_log_wali_kelas` BEFORE UPDATE ON `log_wali_kelas`
       FOR EACH ROW
           IF NEW.id_wali_kelas_new <> OLD.id_wali_kelas_new || NEW.id_wali_kelas_old <> OLD.id_wali_kelas_old
           || NEW.guru_id_new <> OLD.guru_id_new || NEW.guru_id_old <> OLD.guru_id_old || NEW.kelas_id_new <> OLD.kelas_id_new || NEW.kelas_id_old <> OLD.kelas_id_old || NEW.tahun_ajaran_id_new <> OLD.tahun_ajaran_id_new || NEW.tahun_ajaran_id_old <> OLD.tahun_ajaran_id_old 
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
        //
    }
};
