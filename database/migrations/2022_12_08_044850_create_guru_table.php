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
            $table->increments('id_guru');
            $table->string('id_card', 10);
            $table->string('nama_guru', 50);
            $table->string('kode', 5)->nullable()->unique();
            $table->string('nip', 30)->nullable()->unique();
            // nuptk dipindahkan dari detail guru
            $table->char('nuptk', 16)->nullable()->unique();
            $table->enum('status_kepegawaian', ['PNS', 'PPPK', 'GTY/PTY', 'Guru Honor Sekolah']);
            // jenis ptk dipindahkan dari detail guru
            $table->enum('jenis_ptk', ['Guru TIK', 'Guru Mapel', 'Guru BK', 'Guru Kelas'])->nullable();
            // tugas tambahan dipindahkan dari detail guru
            $table->text('tugas_tambahan')->nullable();
            $table->enum('jk', ['L', 'P']);
            $table->string('email')->unique();
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Buddha', 'Hindu', 'Konghucu', 'Aliran Kepercayaan']);
            $table->string('hp', 15)->nullable();
            $table->string('telp', 15)->nullable();
            // mapel id dipindahkan ke tabel guru_mengajar
            // $table->unsignedInteger('mapel_id')->index('mapel_id');
            $table->string('tmp_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('nik')->unique();
            $table->string('no_kk')->nullable();
            $table->string('alamat');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('nama_dusun')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('foto');
            $table->softDeletes();
            $table->timestamps();
            // $table->index(['mapel_id'], 'mapel_id_2');
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
