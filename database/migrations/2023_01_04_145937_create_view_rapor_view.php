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
        DB::statement("CREATE VIEW `view_rapor` AS select `sman14mdn_sia`.`siswa`.`nama_siswa` AS `nama`,`sman14mdn_sia`.`siswa`.`no_induk` AS `nis`,`sman14mdn_sia`.`kelas`.`nama_kelas` AS `kelas`,`sman14mdn_sia`.`tahun_ajaran`.`tahun_ajaran` AS `tahun_ajaran`,`sman14mdn_sia`.`mapel`.`nama_mapel` AS `mapel`,`sman14mdn_sia`.`guru`.`nama_guru` AS `wali_kelas`,`sman14mdn_sia`.`semester`.`semester` AS `semester`,`sman14mdn_sia`.`rapor`.`nilai_pengetahuan` AS `nilai_pengetahuan`,`sman14mdn_sia`.`rapor`.`predikat_pengetahuan` AS `predikat_pengetahuan`,`sman14mdn_sia`.`rapor`.`nilai_keterampilan` AS `nilai_keterampilan`,`sman14mdn_sia`.`rapor`.`predikat_keterampilan` AS `predikat_keterampilan` from ((((((((`sman14mdn_sia`.`rapor` left join `sman14mdn_sia`.`kelas_siswa` on(`sman14mdn_sia`.`rapor`.`kelas_siswa_id` = `sman14mdn_sia`.`kelas_siswa`.`id`)) left join `sman14mdn_sia`.`siswa` on(`sman14mdn_sia`.`kelas_siswa`.`siswa_id` = `sman14mdn_sia`.`siswa`.`id`)) left join `sman14mdn_sia`.`kelas` on(`sman14mdn_sia`.`kelas_siswa`.`kelas_id` = `sman14mdn_sia`.`kelas`.`id`)) left join `sman14mdn_sia`.`tahun_ajaran` on(`sman14mdn_sia`.`kelas_siswa`.`tahun_ajaran_id` = `sman14mdn_sia`.`tahun_ajaran`.`id`)) left join `sman14mdn_sia`.`mapel` on(`sman14mdn_sia`.`rapor`.`mapel_id` = `sman14mdn_sia`.`mapel`.`id`)) left join `sman14mdn_sia`.`wali_kelas` on(`sman14mdn_sia`.`rapor`.`wali_kelas_id` = `sman14mdn_sia`.`wali_kelas`.`id`)) left join `sman14mdn_sia`.`guru` on(`sman14mdn_sia`.`wali_kelas`.`guru_id` = `sman14mdn_sia`.`guru`.`id`)) left join `sman14mdn_sia`.`semester` on(`sman14mdn_sia`.`rapor`.`semester_id` = `sman14mdn_sia`.`semester`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_rapor`");
    }
};
