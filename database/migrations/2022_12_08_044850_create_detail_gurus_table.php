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
        Schema::create('detail_gurus', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('id_guru')->index('id_guru');
            $table->string('nuptk');
            $table->string('jenis_ptk');
            $table->string('tugas_tambahan');
            $table->string('sk_cpns');
            $table->string('tanggal_cpns');
            $table->string('sk_pengangkatan');
            $table->string('tmt_pengangkatan');
            $table->string('lembaga_pengangkatan');
            $table->string('pangkat_golongan');
            $table->string('sumber_gaji');
            $table->string('nama_ibu_kandung');
            $table->string('status_perkawinan');
            $table->string('nama_suami_istri');
            $table->string('nip_suami_istri');
            $table->string('pekerjaan_suami_istri');
            $table->string('tmt_pns');
            $table->string('sudah_lisensi_kepsek');
            $table->string('pernah_diklat_kepengawasan');
            $table->string('keahlian_braille');
            $table->string('keahlian_bahasa_isyarat');
            $table->string('npwp');
            $table->string('nama_wajib_pajak');
            $table->string('kewarganegaraan');
            $table->string('bank');
            $table->string('nomor_rekening_bank');
            $table->string('rekening_atas_nama');
            $table->string('karpeg');
            $table->string('karis_karsu');
            $table->string('lintang');
            $table->string('bujur');
            $table->string('nuks');
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
        Schema::dropIfExists('detail_gurus');
    }
};
