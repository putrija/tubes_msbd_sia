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
            $table->integer('kelas_siswa_id');
            $table->unsignedInteger('mapel_id')->index('mapel_id');
            $table->unsignedInteger('wali_kelas_id')->index('wali_kelas_id');
            $table->unsignedInteger('semester_id')->index('semester_id');
            $table->unsignedInteger('nilai_pengetahuan', 3);
            $table->unsignedInteger('nilai_keterampilan', 3);
            $table->char('predikat_pengetahuan', 2);
            $table->char('predikat_keterampilan', 2);
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
        Schema::dropIfExists('rapor');
    }
};
