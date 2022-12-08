<?php

use Illuminate\Database\Migrations\Migration;
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
        DB::statement("CREATE VIEW `view_siswa` AS select `siakad_baru`.`siswa`.`nama_siswa` AS `Nama_Siswa`,`siakad_baru`.`siswa`.`no_induk` AS `NIS`,`siakad_baru`.`siswa`.`nisn` AS `NISN`,`siakad_baru`.`siswa`.`agama` AS `Agama`,`siakad_baru`.`siswa`.`telp` AS `No_Hp`,`siakad_baru`.`siswa`.`alamat` AS `Alamat`,`siakad_baru`.`siswa`.`email` AS `Email`,`siakad_baru`.`siswa`.`jk` AS `jk` from (`siakad_baru`.`detail_siswas` join `siakad_baru`.`siswa` on(`siakad_baru`.`detail_siswas`.`id_siswa` = `siakad_baru`.`siswa`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_siswa`");
    }
};
