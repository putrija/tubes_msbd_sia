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
        DB::statement("CREATE VIEW `view_pembagian_kelas` AS select `sman14mdn_sia`.`siswa`.`nama_siswa` AS `nama_siswa`,`sman14mdn_sia`.`siswa`.`no_induk` AS `no_induk`,`sman14mdn_sia`.`siswa`.`angkatan` AS `angkatan`,`sman14mdn_sia`.`kelas`.`nama_kelas` AS `nama_kelas`,`sman14mdn_sia`.`kelas`.`ket_kelas` AS `kelas`,`sman14mdn_sia`.`tahun_ajaran`.`tahun_ajaran` AS `tahun_ajaran` from (((`sman14mdn_sia`.`kelas_siswa` left join `sman14mdn_sia`.`siswa` on(`sman14mdn_sia`.`kelas_siswa`.`siswa_id` = `sman14mdn_sia`.`siswa`.`id`)) left join `sman14mdn_sia`.`kelas` on(`sman14mdn_sia`.`kelas_siswa`.`kelas_id` = `sman14mdn_sia`.`kelas`.`id`)) left join `sman14mdn_sia`.`tahun_ajaran` on(`sman14mdn_sia`.`kelas_siswa`.`tahun_ajaran_id` = `sman14mdn_sia`.`tahun_ajaran`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_pembagian_kelas`");
    }
};
