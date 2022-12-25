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
        Schema::table('kelas_siswa', function (Blueprint $table) {
            $table->foreign(['siswa_id'], 'kelas_siswa_ibfk_1')->references(['id'])->on('siswa');
            $table->foreign(['kelas_id'], 'kelas_siswa_ibfk_3')->references(['id_kelas'])->on('kelas');
            $table->foreign(['tahun_ajaran_id'], 'kelas_siswa_ibfk_2')->references(['id_tahun_ajaran'])->on('tahun_ajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kelas_siswa', function (Blueprint $table) {
            $table->dropForeign('kelas_siswa_ibfk_1');
            $table->dropForeign('kelas_siswa_ibfk_3');
            $table->dropForeign('kelas_siswa_ibfk_2');
        });
    }
};
