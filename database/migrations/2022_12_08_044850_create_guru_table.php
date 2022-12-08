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
        Schema::create('guru', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('id_card', 10);
            $table->string('nip', 30)->nullable();
            $table->string('nama_guru', 50);
            $table->unsignedInteger('mapel_id')->index('mapel_id');
            $table->string('kode', 5)->nullable();
            $table->enum('jk', ['L', 'P']);
            $table->string('telp', 15);
            $table->string('hp', 15);
            $table->string('tmp_lahir', 50)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('status_kepegawaian', ['PNS', 'PPPK', 'GTY/PTY', 'Guru Honor Sekolah']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Buddha', 'Hindu', 'Konghucu', 'Aliran Kepercayaan']);
            $table->string('alamat');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('nama_dusun')->nullable();
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('email');
            $table->string('nik');
            $table->string('no_kk')->nullable();
            $table->string('foto');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['mapel_id'], 'mapel_id_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');
    }
};
