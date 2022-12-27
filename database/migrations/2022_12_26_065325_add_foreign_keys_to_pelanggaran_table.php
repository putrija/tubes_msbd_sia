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
        Schema::table('pelanggaran', function (Blueprint $table) {
            $table->foreign(['siswa_id'], 'pelanggaran_ibfk_1')->references(['id'])->on('siswa');
            $table->foreign(['tahun_ajaran_id'], 'pelanggaran_ibfk_3')->references(['id'])->on('tahun_ajaran');
            $table->foreign(['kelas_id'], 'pelanggaran_ibfk_2')->references(['id'])->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pelanggaran', function (Blueprint $table) {
            $table->dropForeign('pelanggaran_ibfk_1');
            $table->dropForeign('pelanggaran_ibfk_3');
            $table->dropForeign('pelanggaran_ibfk_2');
        });
    }
};
