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
        // trigger update
        DB::unprepared('CREATE TRIGGER `update_log_rapor` AFTER UPDATE ON `rapor`
        FOR EACH ROW BEGIN

            INSERT INTO `log_rapor` (`kelas_siswa_id_old`,`kelas_siswa_id_new`, `mapel_id_old` , `mapel_id_new`,`wali_kelas_id_old`, `wali_kelas_id_new`,  
            `semester_id_old`,`semester_id_new`, `nilai_pengetahuan_old`, `nilai_pengetahuan_new`, `predikat_pengetahuan_old`, `predikat_pengetahuan_new`, `nilai_keterampilan_old`, `nilai_keterampilan_new`, `predikat_keterampilan_old`, `predikat_keterampilan_new`, `status`)
	        VALUES ( OLD.kelas_siswa_id, NEW.kelas_siswa_id, OLD.mapel_id, NEW.mapel_id, OLD.wali_kelas_id,
        NEW.wali_kelas_id, OLD.semester_id, NEW.semester_id, OLD.nilai_pengetahuan, NEW.nilai_pengetahuan, OLD.predikat_pengetahuan,  NEW.predikat_pengetahuan, OLD.nilai_keterampilan, NEW.nilai_keterampilan,  OLD.predikat_keterampilan, NEW.predikat_keterampilan, "UPDATE");
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
