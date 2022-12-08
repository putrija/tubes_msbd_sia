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
        DB::statement("CREATE VIEW `view_jadwal` AS select `siakad_baru`.`jadwal`.`jam_mulai` AS `mulai`,`siakad_baru`.`jadwal`.`jam_selesai` AS `selesai`,`siakad_baru`.`mapel`.`nama_mapel` AS `mapel`,`siakad_baru`.`ruang`.`nama_ruang` AS `ruangan`,`siakad_baru`.`kelas`.`nama_kelas` AS `kelas`,`siakad_baru`.`guru`.`kode` AS `guru_kode` from ((((`siakad_baru`.`jadwal` left join `siakad_baru`.`mapel` on(`siakad_baru`.`jadwal`.`mapel_id` = `siakad_baru`.`mapel`.`id`)) left join `siakad_baru`.`ruang` on(`siakad_baru`.`jadwal`.`ruang_id` = `siakad_baru`.`ruang`.`id`)) left join `siakad_baru`.`kelas` on(`siakad_baru`.`jadwal`.`kelas_id` = `siakad_baru`.`kelas`.`id`)) left join `siakad_baru`.`guru` on(`siakad_baru`.`jadwal`.`guru_id` = `siakad_baru`.`guru`.`id`))");
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
