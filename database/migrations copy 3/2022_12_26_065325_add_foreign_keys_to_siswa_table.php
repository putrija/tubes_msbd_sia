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
        Schema::table('siswa', function (Blueprint $table) {
            $table->foreign(['status_id'], 'siswa_ibfk_2')->references(['id'])->on('status_siswa');
            $table->foreign(['kelas_id'], 'siswa_ibfk_3')->references(['id'])->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropForeign('siswa_ibfk_2');
            $table->dropForeign('siswa_ibfk_3');
        });
    }
};
