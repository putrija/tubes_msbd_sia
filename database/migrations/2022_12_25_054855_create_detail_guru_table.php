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
        Schema::create('detail_guru', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id_detail_guru');
            $table->unsignedInteger('guru_id')->index('id_guru');
            $table->string('sk_cpns')->nullable();
            $table->date('tanggal_cpns')->nullable();
            $table->string('sk_pengangkatan')->nullable();
            $table->date('tmt_pengangkatan')->nullable();
            $table->enum('lembaga_pengangkatan', ['Pemerintah Pusat', 'Pemerintah Kab/Kota', 'Pemerintah Provinsi', 'Ketua Yayasan', 'Komite Sekolah', 'Kepala Sekolah'])->nullable();
            $table->string('pangkat_golongan')->nullable();
            $table->string('sumber_gaji')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('nama_suami_istri')->nullable();
            $table->string('nip_suami_istri', 30)->nullable();
            $table->string('pekerjaan_suami_istri')->nullable();
            $table->date('tmt_pns')->nullable();
            $table->enum('sudah_lisensi_kepsek', ['Ya', 'Tidak'])->nullable();
            $table->enum('pernah_diklat_kepengawasan', ['Ya', 'Tidak'])->nullable();
            $table->enum('keahlian_braille', ['Ya', 'Tidak'])->nullable();
            $table->enum('keahlian_bahasa_isyarat', ['Ya', 'Tidak'])->nullable();
            $table->string('npwp')->nullable();
            $table->string('nama_wajib_pajak')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('bank')->nullable();
            $table->string('nomor_rekening_bank')->nullable();
            $table->string('rekening_atas_nama')->nullable();
            $table->string('karpeg')->nullable();
            $table->string('karis_karsu')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
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
        Schema::dropIfExists('detail_guru');
    }
};
