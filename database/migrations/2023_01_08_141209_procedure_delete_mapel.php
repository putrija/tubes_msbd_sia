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
        $store_procedure = "DROP PROCEDURE IF EXISTS `delete_mapel`;

        CREATE PROCEDURE `delete_mapel` (IN idx int)

        BEGIN

        DELETE mapel, guru_mengajar, jadwal_belajar_mengajar FROM mapel
        JOIN guru_mengajar ON mapel.id = guru_mengajar.mapel_id
        JOIN jadwal_belajar_mengajar ON guru_mengajar.id = jadwal_belajar_mengajar.guru_mengajar_id
        WHERE mapel.id = idx;

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
