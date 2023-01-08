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
        DB::unprepared('CREATE TRIGGER `trigger_batal_insert_ruangan` BEFORE INSERT ON `ruang`
        FOR EACH ROW    
        BEGIN

        IF (EXISTS(SELECT `nama_ruang`, `jenis_ruang`
                  FROM `ruang`
                   WHERE `nama_ruang`= NEW.nama_ruang
                     AND `jenis_ruang`= NEW.jenis_ruang
                  )
            ) THEN
                   SIGNAL SQLSTATE VALUE "45000"
                   SET MESSAGE_TEXT = "INSERT ruang gagal, Ruangan sudah tersedia";
        END IF;
       
              END');
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
