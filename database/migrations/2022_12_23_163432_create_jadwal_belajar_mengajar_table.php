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
        Schema::create('jadwal_belajar_mengajar', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id_jadwal_pbm');
            $table->unsignedInteger('guru_id')->index('guru_id');
            $table->unsignedInteger('kelas_id')->index('kelas_id');
            $table->unsignedInteger('mapel_id')->index('mapel_id');
            $table->unsignedInteger('ruang_id')->index('ruang_id');
            $table->enum('hari', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['kelas_id', 'mapel_id', 'guru_id', 'ruang_id'], 'kelas_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_belajar_mengajar');
    }
};
