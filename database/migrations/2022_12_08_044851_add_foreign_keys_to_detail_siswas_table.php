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
        Schema::table('detail_siswas', function (Blueprint $table) {
            $table->foreign(['id_siswa'], 'detail_siswas_ibfk_1')->references(['id'])->on('siswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_siswas', function (Blueprint $table) {
            $table->dropForeign('detail_siswas_ibfk_1');
        });
    }
};
