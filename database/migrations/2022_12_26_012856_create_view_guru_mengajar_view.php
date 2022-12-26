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
        DB::statement("CREATE VIEW `view_guru_mengajar` AS select `sman14mdn_sia`.`guru`.`nama_guru` AS `nama_guru`,`sman14mdn_sia`.`guru`.`id_card_guru` AS `id_card_guru`,`sman14mdn_sia`.`guru`.`kode_guru` AS `kode_guru`,`sman14mdn_sia`.`kelas`.`nama_kelas` AS `nama_kelas`,`sman14mdn_sia`.`kelas`.`ket_kelas` AS `ket_kelas`,`sman14mdn_sia`.`tahun_ajaran`.`tahun_ajaran` AS `tahun_ajaran`,`sman14mdn_sia`.`mapel`.`nama_mapel` AS `mengajar` from ((((`sman14mdn_sia`.`guru_mengajar` left join `sman14mdn_sia`.`guru` on(`sman14mdn_sia`.`guru_mengajar`.`guru_id` = `sman14mdn_sia`.`guru`.`id`)) join `sman14mdn_sia`.`tahun_ajaran` on(`sman14mdn_sia`.`guru_mengajar`.`tahun_ajaran_id` = `sman14mdn_sia`.`tahun_ajaran`.`id`)) left join `sman14mdn_sia`.`kelas` on(`sman14mdn_sia`.`guru_mengajar`.`kelas_id` = `sman14mdn_sia`.`kelas`.`id`)) join `sman14mdn_sia`.`mapel` on(`sman14mdn_sia`.`guru_mengajar`.`mapel_id` = `sman14mdn_sia`.`mapel`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_guru_mengajar`");
    }
};
