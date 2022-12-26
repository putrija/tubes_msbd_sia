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
        DB::statement("CREATE VIEW `view_wali_kelas` AS select `sman14mdn_sia`.`guru`.`nama_guru` AS `nama_guru`,`sman14mdn_sia`.`kelas`.`nama_kelas` AS `wali_kelas_di`,`sman14mdn_sia`.`tahun_ajaran`.`tahun_ajaran` AS `tahun_ajaran`,`sman14mdn_sia`.`guru`.`kode_guru` AS `kode_guru`,`sman14mdn_sia`.`kelas`.`ket_kelas` AS `kelas` from (((`sman14mdn_sia`.`wali_kelas` left join `sman14mdn_sia`.`guru` on(`sman14mdn_sia`.`wali_kelas`.`guru_id` = `sman14mdn_sia`.`guru`.`id`)) join `sman14mdn_sia`.`kelas` on(`sman14mdn_sia`.`wali_kelas`.`kelas_id` = `sman14mdn_sia`.`kelas`.`id`)) join `sman14mdn_sia`.`tahun_ajaran` on(`sman14mdn_sia`.`wali_kelas`.`tahun_ajaran_id` = `sman14mdn_sia`.`tahun_ajaran`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_wali_kelas`");
    }
};
