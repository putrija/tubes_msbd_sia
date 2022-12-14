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
        ///update log wali kelas
        DB::unprepared('CREATE TRIGGER `update_log_wali_kelas` AFTER UPDATE ON `wali_kelas`
        FOR EACH ROW BEGIN
       
        INSERT INTO `log_wali_kelas` (`id_wali_kelas_old`, `id_wali_kelas_new`, `guru_id_old`, `guru_id_new`, `kelas_id_old`, `kelas_id_new`, `tahun_ajaran_id_old`, `tahun_ajaran_id_new`, `status`)
        VALUES ( OLD.id, NEW.id, OLD.guru_id, NEW.guru_id, OLD.kelas_id, NEW.kelas_id, OLD.tahun_ajaran_id, NEW.tahun_ajaran_id, "UPDATE");
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
