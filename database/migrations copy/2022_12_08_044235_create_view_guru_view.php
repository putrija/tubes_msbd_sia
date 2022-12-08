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
        DB::statement("CREATE VIEW `view_guru` AS select `guru`.`nama_guru` AS `nama_guru`,`guru`.`mapel_id` AS `mapel_id`,`guru`.`jk` AS `jk`,`guru`.`kode` AS `kode`,`guru`.`hp` AS `hp`,`guru`.`status_kepegawaian` AS `status_kepegawaian`,`guru`.`id_card` AS `id_card`,`guru`.`nip` AS `nip`,`detail_gurus`.`nuptk` AS `nuptk` from (`detail_gurus` join `guru` on(`detail_gurus`.`id_guru` = `guru`.`id`)) join `siswa`");
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
