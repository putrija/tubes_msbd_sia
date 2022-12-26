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
        Schema::create('log_siswa', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->string('nama_siswa_old', 50)->nullable();
            $table->string('nama_siswa_new', 50)->nullable();
            $table->enum('jk_old', ['L', 'P'])->nullable();
            $table->enum('jk_new', ['L', 'P'])->nullable();
            $table->string('tmp_lahir_old', 50)->nullable();
            $table->string('tmp_lahir_new', 50)->nullable();
            $table->date('tgl_lahir_old')->nullable();
            $table->date('tgl_lahir_new')->nullable();
            $table->string('alamat_old')->nullable();
            $table->string('alamat_new')->nullable();
            $table->string('nisn_old', 30)->nullable();
            $table->string('nisn_new', 30)->nullable();
            $table->integer('kelas_id_old')->nullable();
            $table->integer('kelas_id_new')->nullable();
            $table->string('telp_old', 15)->nullable();
            $table->string('telp_new', 15)->nullable();
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
        Schema::dropIfExists('log_siswa');
    }
};
