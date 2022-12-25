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
        Schema::table('jadwal', function (Blueprint $table) {
            $table->foreign(['guru_id'], 'jadwal_ibfk_1')->references(['id'])->on('guru');
            $table->foreign(['kelas_id'], 'jadwal_ibfk_3')->references(['id'])->on('kelas');
            $table->foreign(['mapel_id'], 'jadwal_ibfk_2')->references(['id'])->on('mapel');
            $table->foreign(['ruang_id'], 'jadwal_ibfk_4')->references(['id'])->on('ruang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwal', function (Blueprint $table) {
            $table->dropForeign('jadwal_ibfk_1');
            $table->dropForeign('jadwal_ibfk_3');
            $table->dropForeign('jadwal_ibfk_2');
            $table->dropForeign('jadwal_ibfk_4');
        });
    }
};
