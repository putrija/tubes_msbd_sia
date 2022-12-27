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
        DB::statement("CREATE VIEW `view_pelanggaran_siswa` AS select `sman14mdn_sia`.`siswa`.`nama_siswa` AS `nama_siswa`,`sman14mdn_sia`.`siswa`.`no_induk` AS `no_induk`,`sman14mdn_sia`.`kelas`.`nama_kelas` AS `nama_kelas`,`sman14mdn_sia`.`kelas`.`ket_kelas` AS `ket_kelas`,`sman14mdn_sia`.`pelanggaran`.`ket_pelanggaran` AS `ket_pelanggaran`,`sman14mdn_sia`.`pelanggaran`.`tanggal_pelanggaran` AS `tanggal_pelanggaran`,`sman14mdn_sia`.`pelanggaran`.`sanksi` AS `sanksi` from (((`sman14mdn_sia`.`pelanggaran` left join `sman14mdn_sia`.`kelas_siswa` on(`sman14mdn_sia`.`pelanggaran`.`kelas_siswa_id` = `sman14mdn_sia`.`kelas_siswa`.`id`)) left join `sman14mdn_sia`.`kelas` on(`sman14mdn_sia`.`kelas_siswa`.`kelas_id` = `sman14mdn_sia`.`kelas`.`id`)) left join `sman14mdn_sia`.`siswa` on(`sman14mdn_sia`.`kelas_siswa`.`siswa_id` = `sman14mdn_sia`.`siswa`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_pelanggaran_siswa`");
    }
};
