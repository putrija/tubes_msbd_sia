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
        // trigger insert
        DB::unprepared('CREATE TRIGGER `insert_log_rapor` AFTER INSERT ON `rapor`
        FOR EACH ROW BEGIN

            INSERT INTO `log_rapor` (`kelas_siswa_id_new`,  `mapel_id_new`, `wali_kelas_id_new`,  
        `semester_id_new`, `nilai_pengetahuan_new`,`predikat_pengetahuan_new`, `nilai_keterampilan_new`,`predikat_keterampilan_new`, `status`)
	        VALUES ( NEW.kelas_siswa_id, NEW.mapel_id,
        NEW.wali_kelas_id, NEW.semester_id, NEW.nilai_pengetahuan, NEW.predikat_pengetahuan,  NEW.nilai_keterampilan,  NEW.predikat_keterampilan, "INSERT");
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
