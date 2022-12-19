<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //menampilkan jumlah data dari setiap kelas
        // DB::unprepared('CREATE FUNCTION tampil_siswa_kelas (p_kelas varchar) RETURNS INT
        // DETERMINISTIC

        // BEGIN
        // DECLARE jml INT;
        // SELECT COUNT(*) AS jml_kelas INTO jml FROM siswa INNER JOIN kelas ON siswa.kelas_id=kelas.id WHERE nama_kelas = p_kelas;
        // -- SELECT COUNT(*) AS jml_kelas INTO jml FROM tb_siswa WHERE kelas = p_kelas;
        // RETURN jml;
        // END');
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
