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
        Schema::create('detail_siswas', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('id_siswa')->index('id_siswa');
            $table->char('nis', 5);
            $table->integer('anak_ke');
            $table->integer('dari_berapa_bersaudara');
            $table->string('diterima_dikelas');
            $table->string('foto_profil_siswa');
            $table->enum('diterima_di_kelas', ['10', '11', '12']);
            $table->date('diterima_pada_tanggal');
            $table->integer('diterima_semester');
            $table->string('sekolah_asal', 100);
            $table->string('alamat_sekolah_asal');
            $table->char('tahun_ijazah_smp', 4);
            $table->string('nomor_ijazah_smp', 20);
            $table->char('tahun_skhun_smp', 4);
            $table->string('nomor_skhun_smp', 20);
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat_ayah');
            $table->string('alamat_ibu');
            $table->string('tlp_ayah', 20);
            $table->string('tlp_ibu', 20);
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('alamat_wali')->nullable();
            $table->string('tlp_wali')->nullable();
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
        Schema::dropIfExists('detail_siswas');
    }
};
