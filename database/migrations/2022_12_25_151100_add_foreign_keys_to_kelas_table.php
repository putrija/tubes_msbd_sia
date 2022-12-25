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
            $table->foreign(['jurusan_id'], 'kelas_ibfk_1')->references(['id_jurusan'])->on('jurusan');
            $table->foreign(['kurikulum_id'], 'kelas_ibfk_2')->references(['id_kurikulum'])->on('kurikulum');
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
