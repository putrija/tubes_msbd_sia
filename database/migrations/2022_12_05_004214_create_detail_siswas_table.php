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
            $table->bigIncrements('id');
            $table->bigInteger('id_siswa');
            $table->char('nis', 5);
            $table->int('anak_ke', 3);
            $table->int('dari_berapa_bersaudara', 3);
            $table->string('diterima_dikelas');
            $table->varchar('foto_profil_siswa');
            $table->enum('diterima_di_kelas', ['10', '11', '12']);
            $table->date('diterima_pada_tanggal');
            $table->int('diterima_semester', 1);
            $table->varchar('sekolah_asal', 100);
            $table->varchar('alamat_sekolah_asal', 255);
            $table->char('tahun_ijazah_smp', 4);
            $table->varchar('nomor_ijazah_smp', 20);
            $table->char('tahun_skhun_smp', 4);
            $table->varchar('nomor_skhun_smp', 20);
            $table->varchar('nama_ayah');
            $table->varchar('nama_ibu');
            $table->varchar('alamat_ayah');
            $table->varchar('alamat_ibu');
            $table->varchar('tlp_ayah', 20);
            $table->varchar('tlp_ibu', 20);
            $table->varchar('pekerjaan_ayah');
            $table->varchar('pekerjaan_ibu');
            $table->varchar('nama_wali')->nullable();
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
