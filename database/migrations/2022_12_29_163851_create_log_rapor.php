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
        Schema::create('log_rapor', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('kelas_siswa_id_old')->nullable();
            $table->unsignedInteger('kelas_siswa_id_new')->nullable();
            $table->unsignedInteger('mapel_id_old')->nullable();
            $table->unsignedInteger('mapel_id_new')->nullable();
            $table->unsignedInteger('wali_kelas_id_old')->nullable();
            $table->unsignedInteger('wali_kelas_id_new')->nullable();
            $table->unsignedInteger('semester_id_old')->nullable();
            $table->unsignedInteger('semester_id_new')->nullable();
            $table->unsignedInteger('nilai_pengetahuan_old')->nullable();
            $table->unsignedInteger('nilai_pengetahuan_new')->nullable();
            $table->char('predikat_pengetahuan_old', 2)->nullable();
            $table->char('predikat_pengetahuan_new', 2)->nullable();
            $table->unsignedInteger('nilai_keterampilan_old')->nullable();
            $table->unsignedInteger('nilai_keterampilan_new')->nullable();
            $table->char('predikat_keterampilan_old', 2)->nullable();
            $table->char('predikat_keterampilan_new', 2)->nullable();
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
        Schema::dropIfExists('log_rapor');
    }
};
