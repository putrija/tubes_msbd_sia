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
        // DB::unprepared('CREATE TRIGGER log_guruku AFTER UPDATE ON `guru` FOR EACH ROW

        //     BEGIN

        //     INSERT INTO `log_gurus` (`id_card_old`,`id_card_new`,`nip_old`, `nip_new`,`nama_guru_old`, `nama_guru_new`, `mapel_id_old`,`mapel_id_new`,`kode_old`,`kode_new`,`jk_old`, `jk_new`, `telp_old`, `telp_new`,`hp_old`, `hp_new`, `tmp_lahir_old`, `tmp_lahir_new`, `tgl_lahir_old`, `tgl_lahir_new`,`status_kepegawaian_old`, `status_kepegawaian_new`,`agama_old`, `agama_new`, `alamat_old`, `alamat_new`,  `rt_old`, `rt_new`, `rw_old`, `rw_new`, `nama_dusun_old`, `nama_dusun_new`, `desa_kelurahan_old`, `desa_kelurahan_new`, `kecamatan_old`, `kecamatan_new`, `kode_pos_old`, `kode_pos_new`, `email_old`, `email_new`, `nik_old`, `nik_new`,`no_kk_old`, `no_kk_new`,`status`, `waktu`,)
        //     VALUES (OLD.id_card, NEW.id_card, OLD.nip, NEW.nip,  OLD.nama_guru, NEW.nama_guru, OLD.mapel_id, NEW.mapel_id, OLD.kode, NEW.kode, OLD.jk, NEW.jk, OLD.telp, NEW.telp, OLD.hp, NEW.hp, OLD.tmp_lahir, NEW.tmp_lahir, OLD.tgl_lahir, NEW.tgl_lahir,OLD.status_kepegawaian, NEW.status_kepegawaian, OLD.agama, NEW.agama, OLD.alamat, NEW.alamat,OLD.rt, NEW.rt,OLD.rw, NEW.rw, OLD.nama_dusun, NEW.nama_dusun, OLD.desa_kelurahan, NEW.desa_kelurahan, OLD.kecamatan, NEW.kecamatan, OLD.kode_pos, NEW.kode_pos, OLD.email, NEW.email, OLD.nik, NEW.nik, OLD.no_kk, NEW.no_kk, "UPDATE", now());

        //     END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DB::unprepared('DROP TRIGGER `log_guruku`');
    }
};
