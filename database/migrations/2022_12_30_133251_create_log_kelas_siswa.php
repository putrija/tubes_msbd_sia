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
        Schema::create('log_kelas_siswa', function (Blueprint $table) {
            $table->comment('');
            $table->string('siswa_id_old', 10)->nullable();
            $table->string('siswa_id_new', 10)->nullable();
            $table->string('kelas_id_old', 10)->nullable();
            $table->string('kelas_id_new', 10)->nullable();
            $table->string('tahun_ajaran_id_old', 10)->nullable();
            $table->string('tahun_ajaran_id_new', 10)->nullable();
            $table->string('status', 50)->nullable();
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
        Schema::dropIfExists('log_kelas_siswa');
    }
};
