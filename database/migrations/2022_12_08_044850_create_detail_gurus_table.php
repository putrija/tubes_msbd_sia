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
            $table->unsignedInteger('id_guru')->length(10)->index('id_guru');
            $table->char('nuptk',16)->nullable()->unique();
            $table->enum('jenis_ptk',['Guru TIK', 'Guru Mapel', 'Guru BK', 'Guru Kelas'])->nullable();
            $table->text('tugas_tambahan')->nullable();
            $table->string('sk_cpns',50)->nullable()->unique();
            $table->date('tanggal_cpns')->nullable();
            $table->string('sk_pengangkatan',50)->nullable()->unique();
            $table->date('tmt_pengangkatan')->nullable();
            $table->enum('lembaga_pengangkatan',['Pemerintah Pusat','Pemerintah Kab/Kota','Pemerintah Provinsi','Ketua Yayasan','Kepala Sekolah'])->nullable();
            $table->enum('pangkat_golongan',['I/a','I/b','I/c','I/d','II/a','II/b','II/c','II/d','III/a','III/b','III/c','III/d','IV/a','IV/b','IV/c','IV/d'])->nullable();
            $table->enum('sumber_gaji',['APBD Kabupaten/Kota', 'APBN', 'APBD Provinsi', 'Sekolah Yayasan','Lainnya'])->nullable();
            $table->string('nama_ibu_kandung',255)->nullable();
            $table->enum('status_perkawinan',['Menikah','Belum Menikah'])->nullable();
            $table->string('nama_suami_istri', 255)->nullable();
            $table->char('nip_suami_istri',18)->nullable();
            $table->string('pekerjaan_suami_istri',255)->nullable();
            $table->date('tmt_pns')->nullable();
            $table->enum('sudah_lisensi_kepsek',['Ya','Tidak'])->nullable();
            $table->enum('pernah_diklat_kepengawasan',['Ya','Tidak'])->nullable();
            $table->enum('keahlian_braille',['Ya','Tidak'])->nullable();
            $table->enum('keahlian_bahasa_isyarat',['Ya','Tidak'])->nullable();
            $table->char('npwp',15)->nullable()->unique();
            $table->string('nama_wajib_pajak',255)->nullable();
            $table->string('kewarganegaraan',255)->nullable();
            $table->string('bank',100)->nullable();
            $table->string('nomor_rekening_bank',50)->nullable();
            $table->string('rekening_atas_nama',255)->nullable();
            $table->string('karpeg',15)->nullable();
            $table->string('karis_karsu',20)->nullable();
            $table->string('lintang',255)->nullable();
            $table->string('bujur',255)->nullable();
            $table->string('nuks',255)->nullable();
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
