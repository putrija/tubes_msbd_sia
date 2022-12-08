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
        Schema::table('kelas', function (Blueprint $table) {
            $table->foreign(['guru_id'], 'kelas_ibfk_1')->references(['id'])->on('guru');
            $table->foreign(['paket_id'], 'kelas_ibfk_2')->references(['id'])->on('paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kelas', function (Blueprint $table) {
            $table->dropForeign('kelas_ibfk_1');
            $table->dropForeign('kelas_ibfk_2');
        });
    }
};
