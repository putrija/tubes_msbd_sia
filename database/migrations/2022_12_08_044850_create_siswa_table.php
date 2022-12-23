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
        Schema::create('siswa', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id_siswa');
            $table->char('no_induk', 5)->unique();
            $table->char('nisn', 10)->unique();
            $table->string('nama_siswa');
            $table->enum('jk', ['L', 'P']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Buddha', 'Hindu', 'Konghucu', 'Aliran Kepercayaan']);
            $table->string('telp', 15)->nullable();
            $table->string('tmp_lahir', 50)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('alamat');
            $table->string('email')->unique();
            $table->string('foto');
            $table->unsignedInteger('tahun_ajaran_id')->index('tahun_ajaran_id');
            $table->unsignedInteger('status_id')->index('status_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
