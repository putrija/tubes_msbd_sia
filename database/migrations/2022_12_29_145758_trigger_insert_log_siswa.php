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
        //trigger insert
        DB::unprepared('CREATE TRIGGER `insert_log_siswa` AFTER UPDATE ON `siswa`
        FOR EACH ROW BEGIN
       
        INSERT INTO `log_siswa` (`nama_siswa_old`,`nama_siswa_new`, `jk_old`, `jk_new`, `tmp_lahir_old`, `tmp_lahir_new`,`tgl_lahir_old`, `tgl_lahir_new`, `alamat_old`, 
`alamat_new`, `nisn_old`, `nisn_new`, `kelas_id_old`, `kelas_id_new`,`telp_old`,`telp_new`,`status`)
VALUES ( NEW.nama_siswa, NEW.jk, NEW.tmp_lahir, NEW.tgl_lahir, NEW.alamat, NEW.nisn, NEW.kelas_id, NEW.telp, "INSERT");
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
