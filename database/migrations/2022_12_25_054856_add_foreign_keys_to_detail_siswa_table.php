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
        Schema::table('detail_siswa', function (Blueprint $table) {
            $table->foreign(['id_siswa'], 'detail_siswa_ibfk_1')->references(['id_siswa'])->on('siswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_siswa', function (Blueprint $table) {
            $table->dropForeign('detail_siswa_ibfk_1');
        });
    }
};
