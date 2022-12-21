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
        DB::unprepared('CREATE TRIGGER log_siswa AFTER UPDATE ON `siswa` FOR EACH ROW

                BEGIN

                INSERT INTO `log_siswa` (`nama_siswa_old`, `nama_siswa_new`, `jk_old`, `jk_new`,`tmp_lahir_old`, `tmp_lahir_new`, `tgl_lahir_old`, `tgl_lahir_new`, 
                `alamat_old`, `alamat_new`, `nisn_old`, `nisn_new`, `kelas_id_old`, `kelas_id_new`, `telp_old`, `telp_new`,`status`  )
VALUES (OLD.nama_siswa, NEW.nama_siswa, OLD.jk, NEW.jk, OLD.tmp_lahir, NEW.tmp_lahir, OLD.tgl_lahir, NEW.tgl_lahir, OLD.alamat, NEW.alamat, OLD.nisn, NEW.nisn, OLD.kelas_id, NEW.kelas_id, OLD.telp, NEW.telp, "update");
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `log_siswa`');
    }
};
