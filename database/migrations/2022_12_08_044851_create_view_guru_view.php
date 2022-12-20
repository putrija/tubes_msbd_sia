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
        DB::statement("CREATE VIEW view_guru AS select `guru`.`nama_guru` AS `Nama`,`mapel`.`nama_mapel` AS `Mapel`,`guru`.`id_card` AS `Card` from (`guru` join `mapel` on(`guru`.`mapel_id` = `mapel`.`id`))");
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
