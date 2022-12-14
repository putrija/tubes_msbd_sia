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
            $table->foreign(['semester_id'], 'rapor_ibfk_1')->references(['id'])->on('semester');
            $table->foreign(['mapel_id'], 'rapor_ibfk_3')->references(['id'])->on('mapel');
            $table->foreign(['wali_kelas_id'], 'rapor_ibfk_2')->references(['id'])->on('wali_kelas');
            $table->foreign(['kelas_siswa_id'], 'rapor_ibfk_4')->references(['id'])->on('kelas_siswa')->onDelete('cascade');
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
