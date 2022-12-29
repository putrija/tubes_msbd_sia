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
        Schema::create('log_jadwal_belajar_mengajar', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('guru_mengajar_id_old', 10)->nullable();
            $table->string('guru_mengajar_id_new', 10)->nullable();
            $table->string('ruang_id_old', 10)->nullable();
            $table->string('ruang_id_new', 10)->nullable();
            $table->enum('hari_old', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'])->nullable();
            $table->enum('hari_new', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'])->nullable();
            $table->string('jam_mulai_old', 15)->nullable();
            $table->string('jam_mulai_new', 15)->nullable();
            $table->time('jam_selesai_old')->nullable();
            $table->time('jam_selesai_new')->nullable();
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
        Schema::dropIfExists('log_jadwal_belajar_mengajar');
    }
};
