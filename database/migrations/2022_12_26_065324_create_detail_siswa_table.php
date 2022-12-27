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
        Schema::create('detail_siswa', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('siswa_id')->index('siswa_id');
            $table->integer('anak_ke')->nullable();
            $table->integer('dari_berapa_bersaudara')->nullable();
            $table->enum('diterima_di_kelas', ['10', '11', '12'])->nullable();
            $table->date('diterima_pada_tanggal')->nullable();
            $table->integer('diterima_semester')->nullable();
            $table->string('sekolah_asal', 100)->nullable();
            $table->string('alamat_sekolah_asal')->nullable();
            $table->char('tahun_ijazah_smp', 4)->nullable();
            $table->string('nomor_ijazah_smp', 20)->nullable()->unique('detail_siswas_nomor_ijazah_smp_unique');
            $table->char('tahun_skhun_smp', 4)->nullable();
            $table->string('nomor_skhun_smp', 20)->nullable()->unique('detail_siswas_nomor_skhun_smp_unique');
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('alamat_ayah')->nullable();
            $table->string('alamat_ibu')->nullable();
            $table->string('tlp_ayah', 20)->nullable();
            $table->string('tlp_ibu', 20)->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('alamat_wali')->nullable();
            $table->string('tlp_wali', 20)->nullable();
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
        Schema::dropIfExists('detail_siswa');
    }
};
