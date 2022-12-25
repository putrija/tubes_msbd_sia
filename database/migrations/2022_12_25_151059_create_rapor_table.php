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
        Schema::create('rapor', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id_rapor');
            $table->unsignedInteger('kelas_siswa_id')->index('kelas_siswa_id');
            $table->unsignedInteger('mapel_id')->index('mapel_id');
            $table->unsignedInteger('wali_kelas_id')->index('wali_kelas_id');
            $table->unsignedInteger('semester_id')->index('semester_id');
            $table->unsignedInteger('nilai_pengetahuan');
            $table->char('predikat_pengetahuan', 2);
            $table->unsignedInteger('nilai_keterampilan');
            $table->char('predikat_keterampilan', 2);
            $table->timestamps();

            $table->index(['kelas_siswa_id'], 'kelas_siswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapor');
    }
};
