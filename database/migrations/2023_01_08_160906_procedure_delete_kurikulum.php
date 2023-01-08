<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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
        $store_procedure = "DROP PROCEDURE IF EXISTS `delete_kurikulum`;

        CREATE PROCEDURE `delete_kurikulum` (IN idx int)

        BEGIN

        DELETE kurikulum, jurusan, mapel FROM kurikulum
        JOIN jurusan ON kurikulum.id = jurusan.kurikulum_id
        JOIN mapel ON kurikulum.id = mapel.kurikulum_id
        WHERE kurikulum.id = idx;

        END;";

        DB::unprepared($store_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
