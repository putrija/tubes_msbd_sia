<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        //         DB::unprepared('CREATE TRIGGER log_insert_guru AFTER INSERT ON `guru` FOR EACH ROW

        //                 BEGIN

        //                 INSERT INTO `log_gurus` (`nama_guru_new`, `tmp_lahir_new`, `hp_new`, `telp_new`,`jk_new`,  `tgl_lahir_new`)
        // VALUES (NEW.nama_guru, NEW.tmp_lahir, NEW.hp, NEW.telp, NEW.jk, NEW.tgl_lahir);
        //                 END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DB::unprepared('DROP TRIGGER `log_insert_guru`');
    }
};
