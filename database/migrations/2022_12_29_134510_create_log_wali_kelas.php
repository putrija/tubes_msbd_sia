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
        Schema::create('log_wali_kelas', function (Blueprint $table) {
            $table->comment('');
            $table->string('id_wali_kelas_old', 10)->nullable();
            $table->string('id_wali_kelas_new', 10)->nullable();
            $table->string('guru_id_old', 10)->nullable();
            $table->string('guru_id_new', 10)->nullable();
            $table->string('kelas_id_old', 10)->nullable();
            $table->string('kelas_id_new', 10)->nullable();
            $table->string('tahun_ajaran_id_old', 10)->nullable();
            $table->string('tahun_ajaran_id_new', 10)->nullable();
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
        Schema::dropIfExists('log_wali_kelas');
    }
};
