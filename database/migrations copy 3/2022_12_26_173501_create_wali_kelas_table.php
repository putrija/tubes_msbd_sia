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
        Schema::create('wali_kelas', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id_wali_kelas');
            $table->unsignedInteger('guru_id')->index('guru_id');
            $table->unsignedInteger('kelas_id')->index('kelas_id');
            $table->unsignedInteger('tahun_ajaran_id')->index('tahun_ajaran_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wali_kelas');
    }
};
