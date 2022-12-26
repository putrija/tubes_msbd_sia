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
            $table->increments('id');
            $table->unsignedInteger('guru_mengajar_id')->index('guru_mengajar_id');
            $table->unsignedInteger('kelas_id')->index('kelas_id');
            $table->unsignedInteger('ruang_id')->index('ruang_id');
            $table->enum('hari', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
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
        Schema::dropIfExists('jadwal_belajar_mengajar');
    }
};
