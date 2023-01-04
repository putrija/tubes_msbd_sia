<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER `trigger_batal_insert_guru_mengajar` BEFORE INSERT ON `guru_mengajar`
        FOR EACH ROW    
        BEGIN

        IF (EXISTS(SELECT `guru_id`, `mapel_id`, `tahun_ajaran_id`
                  FROM `guru_mengajar`
                   WHERE `guru_id`= NEW.guru_id
                     AND `mapel_id`= NEW.mapel_id
                       AND `tahun_ajaran_id` = NEW.tahun_ajaran_id
                  )
            ) THEN
                   SIGNAL SQLSTATE VALUE "45000"
                   SET MESSAGE_TEXT = "INSERT data gagal, data sudah tersedia";
        END IF;
       
    --             INSERT INTO `log_guru` (`nama_guru_old`,`nama_guru_new`, `tmp_lahir_old`, `tmp_lahir_new`,`hp_old`, `hp_new`, `telp_old`, 
    --    `telp_new`, `jk_old`, `jk_new`,`tgl_lahir_old`,`tgl_lahir_new`,`status`)
    --        VALUES ( OLD.nama_guru,NEW.nama_guru, OLD.tmp_lahir, NEW.tmp_lahir, OLD.hp, 
    --    NEW.hp, OLD.telp, NEW.telp, OLD.jk, NEW.jk,  OLD.tgl_lahir, NEW.tgl_lahir, "UPDATE");
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
