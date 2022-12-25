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
            $table->string('id_card_guru', 10)->unique('id_card_guru');
            $table->string('nama_guru');
            $table->string('kode_guru', 5)->unique('kode_guru');
            $table->string('nip', 30)->nullable();
            $table->char('nuptk', 16)->nullable();
            $table->unsignedInteger('status_kepegawaian_id')->index('status_kepegawaian_id');
            $table->unsignedInteger('jenis_ptk_id')->index('jenis_ptk_id');
            $table->unsignedInteger('tugas_tambahan_id')->nullable()->index('tugas_tambahan_id');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('email')->nullable();
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Buddha', 'Hindu', 'Konghucu', 'Aliran Kepercayaan']);
            $table->string('no_hp', 15)->nullable();
            $table->string('no_telepon', 15)->nullable();
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->char('nik', 16)->nullable();
            $table->string('no_kk', 30)->nullable();
            $table->string('alamat_jalan');
            $table->char('rt', 3)->nullable();
            $table->char('rw', 3)->nullable();
            $table->string('nama_dusun')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->char('kode_pos', 5)->nullable();
            $table->string('foto')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['kode_guru'], 'kode_guru_2');
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
