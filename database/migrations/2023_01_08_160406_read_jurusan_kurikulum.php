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
        $store_procedure = "DROP PROCEDURE IF EXISTS `read_jurusan_kurikulum`;

        CREATE  PROCEDURE `read_jurusan_kurikulum` (IN idx int)

        BEGIN
        SELECT jurusan.id, jurusan.ket_jurusan, jurusan.kurikulum_id, kurikulum.nama_kurikulum 
        FROM jurusan 
        JOIN kurikulum ON jurusan.kurikulum_id = kurikulum.id
        WHERE jurusan.kurikulum_id = idx;

        END;";

        DB::unprepared($store_procedure);
    }
    // BEGIN
    // SELECT jurusan.id, jurusan.ket_jurusan, jurusan.kurikulum_id, kurikulum.nama_kurikulum 
    // FROM jurusan 
    // JOIN kurikulum ON jurusan.kurikulum_id = kurikulum.id
    // WHERE jurusan.kurikulum_id = idx;

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
