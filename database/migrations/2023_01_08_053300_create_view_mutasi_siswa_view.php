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
        DB::statement("CREATE VIEW `view_mutasi_siswa` AS select `sman14mdn_sia`.`siswa`.`no_induk` AS `no_induk`,`sman14mdn_sia`.`siswa`.`nama_siswa` AS `nama_siswa`,`sman14mdn_sia`.`siswa`.`email` AS `email`,`sman14mdn_sia`.`siswa`.`angkatan` AS `angkatan`,`sman14mdn_sia`.`status_siswa`.`ket_status` AS `ket_status` from (`sman14mdn_sia`.`siswa` join `sman14mdn_sia`.`status_siswa` on(`sman14mdn_sia`.`siswa`.`status_id` = `sman14mdn_sia`.`status_siswa`.`id`)) where `sman14mdn_sia`.`status_siswa`.`ket_status` = 'Drop Out' or `sman14mdn_sia`.`status_siswa`.`ket_status` = 'Pindah'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_mutasi_siswa`");
    }
};
