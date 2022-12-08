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
        DB::statement("CREATE VIEW `view_guru` AS select `siakad_baru`.`guru`.`nama_guru` AS `nama_guru`,`siakad_baru`.`guru`.`mapel_id` AS `mapel_id`,`siakad_baru`.`guru`.`jk` AS `jk`,`siakad_baru`.`guru`.`kode` AS `kode`,`siakad_baru`.`guru`.`hp` AS `hp`,`siakad_baru`.`guru`.`status_kepegawaian` AS `status_kepegawaian`,`siakad_baru`.`guru`.`id_card` AS `id_card`,`siakad_baru`.`guru`.`nip` AS `nip`,`siakad_baru`.`detail_gurus`.`nuptk` AS `nuptk` from (`siakad_baru`.`detail_gurus` join `siakad_baru`.`guru` on(`siakad_baru`.`detail_gurus`.`id_guru` = `siakad_baru`.`guru`.`id`)) join `siakad_baru`.`siswa`");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_guru`");
    }
};
