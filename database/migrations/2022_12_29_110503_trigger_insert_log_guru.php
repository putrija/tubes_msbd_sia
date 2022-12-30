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
        // trigger insert
        DB::unprepared('CREATE TRIGGER `insert_log_guru` AFTER INSERT ON `guru`
        FOR EACH ROW BEGIN

            INSERT INTO `log_guru` (`nama_guru_new`,  `tmp_lahir_new`, `hp_new`,  
        `telp_new`, `jk_new`,`tgl_lahir_new`, `status`)
	        VALUES ( NEW.nama_guru, NEW.tmp_lahir,
        NEW.hp, NEW.telp, NEW.jk, NEW.tgl_lahir, "INSERT");
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
