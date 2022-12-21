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
        DB::unprepared('CREATE TRIGGER log_guruku AFTER UPDATE ON `guru` FOR EACH ROW

                BEGIN

                INSERT INTO `log_gurus` (`nama_guru_old`, `nama_guru_new`, `tmp_lahir_old`, `tmp_lahir_new`, `hp_old`, `hp_new`, `telp_old`, `telp_new`,`jk_old`, `jk_new`, `tgl_lahir_old`, `tgl_lahir_new`,`status`)
VALUES (OLD.nama_guru, NEW.nama_guru, OLD.tmp_lahir, NEW.tmp_lahir, OLD.hp, NEW.hp, OLD.telp, NEW.telp, OLD.jk, NEW.jk, OLD.tgl_lahir, NEW.tgl_lahir, "update");
                END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `log_guruku`');
    }
};
