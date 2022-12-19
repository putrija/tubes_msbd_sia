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
        Schema::create('log_gurus', function (Blueprint $table) {
            $table->id();
            $table->string('id_card_old', 10)->nullable();
            $table->string('id_card_new', 10)->nullable();
            $table->string('nip_old', 30)->nullable();
            $table->string('nip_new', 30)->nullable();
            $table->string('nama_guru_old', 50)->nullable();
            $table->string('nama_guru_new', 50)->nullable();
            $table->unsignedInteger('mapel_id_old')->nullable();
            $table->unsignedInteger('mapel_id_new')->nullable();
            $table->string('kode_old', 5)->nullable();
            $table->string('kode_new', 5)->nullable();
            $table->enum('jk_old', ['L', 'P'])->nullable();
            $table->enum('jk_new', ['L', 'P'])->nullable();
            $table->string('telp_old', 15)->nullable();
            $table->string('telp_new', 15)->nullable();
            $table->string('hp_old', 15)->nullable();
            $table->string('hp_new', 15)->nullable();
            $table->string('tmp_lahir_old', 50)->nullable();
            $table->string('tmp_lahir_new', 50)->nullable();
            $table->date('tgl_lahir_old')->nullable();
            $table->date('tgl_lahir_new')->nullable();
            $table->enum('status_kepegawaian_old', ['PNS', 'PPPK', 'GTY/PTY', 'Guru Honor Sekolah'])->nullable();
            $table->enum('status_kepegawaian_new', ['PNS', 'PPPK', 'GTY/PTY', 'Guru Honor Sekolah'])->nullable();
            $table->enum('agama_old', ['Islam', 'Kristen', 'Katolik', 'Buddha', 'Hindu', 'Konghucu', 'Aliran Kepercayaan'])->nullable();
            $table->enum('agama_new', ['Islam', 'Kristen', 'Katolik', 'Buddha', 'Hindu', 'Konghucu', 'Aliran Kepercayaan'])->nullable();
            $table->string('alamat_old')->nullable();
            $table->string('alamat_new')->nullable();
            $table->string('rt_old')->nullable();
            $table->string('rt_new')->nullable();
            $table->string('rw_old')->nullable();
            $table->string('rw_new')->nullable();
            $table->string('nama_dusun_old')->nullable();
            $table->string('nama_dusun_new')->nullable();
            $table->string('desa_kelurahan_old')->nullable();
            $table->string('desa_kelurahan_new')->nullable();
            $table->string('kecamatan_old')->nullable();
            $table->string('kecamatan_new')->nullable();
            $table->string('kode_pos_old')->nullable();
            $table->string('kode_pos_new')->nullable();
            $table->string('email_old')->nullable();
            $table->string('email_new')->nullable();
            $table->string('nik_old')->nullable();
            $table->string('nik_new')->nullable();
            $table->string('no_kk_old')->nullable();
            $table->string('no_kk_new')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('waktu')->nullable();
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
        Schema::dropIfExists('log_gurus');
    }
};
