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
        Schema::table('guru_mengajar', function (Blueprint $table) {
            $table->foreign(['mapel_id'], 'guru_mengajar_ibfk_1')->references(['id_mapel'])->on('mapel');
            $table->foreign(['kelas_id'], 'guru_mengajar_ibfk_3')->references(['id_kelas'])->on('kelas');
            $table->foreign(['guru_id'], 'guru_mengajar_ibfk_2')->references(['id_guru'])->on('guru');
            $table->foreign(['tahun_ajaran_id'], 'guru_mengajar_ibfk_4')->references(['id_tahun_ajaran'])->on('tahun_ajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guru_mengajar', function (Blueprint $table) {
            $table->dropForeign('guru_mengajar_ibfk_1');
            $table->dropForeign('guru_mengajar_ibfk_3');
            $table->dropForeign('guru_mengajar_ibfk_2');
            $table->dropForeign('guru_mengajar_ibfk_4');
        });
    }
};
