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
        Schema::table('rapor', function (Blueprint $table) {
            $table->foreign(['semester_id'], 'rapor_ibfk_1')->references(['id_semester'])->on('semester');
            $table->foreign(['mapel_id'], 'rapor_ibfk_3')->references(['id_mapel'])->on('mapel');
            $table->foreign(['wali_kelas_id'], 'rapor_ibfk_2')->references(['id_wali_kelas'])->on('wali_kelas');
            $table->foreign(['kelas_siswa_id'], 'rapor_ibfk_4')->references(['id_kelas_siswa'])->on('kelas_siswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rapor', function (Blueprint $table) {
            $table->dropForeign('rapor_ibfk_1');
            $table->dropForeign('rapor_ibfk_3');
            $table->dropForeign('rapor_ibfk_2');
            $table->dropForeign('rapor_ibfk_4');
        });
    }
};
