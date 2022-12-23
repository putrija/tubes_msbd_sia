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
        Schema::create('kelas_siswa', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id_kelas_siswa');
            $table->unsignedInteger('siswa_id', 10)->index('siswa_id');
            $table->unsignedInteger('kelas_id', 10)->index('kelas_id');
            $table->unsignedInteger('tahun_ajaran_id', 10)->index('tahun_ajaran_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_siswa');
    }
};
