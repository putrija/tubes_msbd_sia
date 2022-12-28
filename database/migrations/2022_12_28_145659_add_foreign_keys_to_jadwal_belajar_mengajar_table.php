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
        Schema::table('jadwal_belajar_mengajar', function (Blueprint $table) {
            $table->foreign(['ruang_id'], 'jadwal_belajar_mengajar_ibfk_4')->references(['id'])->on('ruang');
            $table->foreign(['guru_mengajar_id'], 'jadwal_belajar_mengajar_ibfk_5')->references(['id'])->on('guru_mengajar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwal_belajar_mengajar', function (Blueprint $table) {
            $table->dropForeign('jadwal_belajar_mengajar_ibfk_4');
            $table->dropForeign('jadwal_belajar_mengajar_ibfk_5');
        });
    }
};
