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
        DB::statement("CREATE VIEW `view_jadwal` AS select `jadwal`.`jam_mulai` AS `mulai`,`jadwal`.`jam_selesai` AS `selesai`,`mapel`.`nama_mapel` AS `mapel`,`ruang`.`nama_ruang` AS `ruangan`,`kelas`.`nama_kelas` AS `kelas`,`guru`.`kode` AS `guru_kode` from ((((`jadwal` left join `mapel` on(`jadwal`.`mapel_id` = `mapel`.`id`)) left join `ruang` on(`jadwal`.`ruang_id` = `ruang`.`id`)) left join `kelas` on(`jadwal`.`kelas_id` = `kelas`.`id`)) left join `guru` on(`jadwal`.`guru_id` = `guru`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_jadwal`");
    }
};
