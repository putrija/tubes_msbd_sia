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
        DB::unprepared('
        CREATE FUNCTION nilai_ips (mapel_1 INT, mapel_2 INT, mapel_3 INT, mapel_4 INT, mapel_5 INT, mapel_6 INT, mapel_7 INT, mapel_8 INT, mapel_9 INT, mapel_10 INT, mapel_11 INT, mapel_12 INT)
            RETURNS VARCHAR(5)
            BEGIN
                DECLARE semua_nilai FLOAT;
                SET semua_nilai = mapel_1 + mapel_2 + mapel_3 + mapel_4 + mapel_5 + mapel_6 + mapel_7 + mapel_8 + mapel_9 + mapel_10 + mapel_11 + mapel_12;
                RETURN semua_nilai / 12;
            END
        ');
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
