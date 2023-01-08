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
        Schema::table('wali_kelas', function (Blueprint $table) {
            $table->foreign(['kelas_id'], 'wali_kelas_ibfk_1')->references(['id'])->on('kelas')->onDelete('cascade');
            $table->foreign(['guru_id'], 'wali_kelas_ibfk_3')->references(['id'])->on('guru');
            $table->foreign(['tahun_ajaran_id'], 'wali_kelas_ibfk_2')->references(['id'])->on('tahun_ajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wali_kelas', function (Blueprint $table) {
            $table->dropForeign('wali_kelas_ibfk_1');
            $table->dropForeign('wali_kelas_ibfk_3');
            $table->dropForeign('wali_kelas_ibfk_2');
        });
    }
};
