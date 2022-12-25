<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `view_guru` AS select `sman14mdn_sia`.`guru`.`id_card_guru` AS `id_card_guru`,`sman14mdn_sia`.`guru`.`nama_guru` AS `nama_guru`,`sman14mdn_sia`.`guru`.`kode_guru` AS `kode_guru`,`sman14mdn_sia`.`guru`.`nip` AS `nip`,`sman14mdn_sia`.`guru`.`nuptk` AS `nuptk`,`sman14mdn_sia`.`guru`.`status_kepegawaian_id` AS `status_kepegawaian_id`,`sman14mdn_sia`.`guru`.`jenis_ptk_id` AS `jenis_ptk_id`,`sman14mdn_sia`.`guru`.`tugas_tambahan_id` AS `tugas_tambahan_id`,`sman14mdn_sia`.`guru`.`jenis_kelamin` AS `jenis_kelamin`,`sman14mdn_sia`.`guru`.`email` AS `email`,`sman14mdn_sia`.`guru`.`agama` AS `agama`,`sman14mdn_sia`.`guru`.`no_hp` AS `no_hp`,`sman14mdn_sia`.`guru`.`no_telepon` AS `no_telepon`,`sman14mdn_sia`.`guru`.`tempat_lahir` AS `tempat_lahir`,`sman14mdn_sia`.`guru`.`tanggal_lahir` AS `tanggal_lahir`,`sman14mdn_sia`.`guru`.`nik` AS `nik`,`sman14mdn_sia`.`guru`.`no_kk` AS `no_kk`,`sman14mdn_sia`.`guru`.`alamat_jalan` AS `alamat_jalan`,`sman14mdn_sia`.`guru`.`rt` AS `rt`,`sman14mdn_sia`.`guru`.`rw` AS `rw`,`sman14mdn_sia`.`guru`.`nama_dusun` AS `nama_dusun`,`sman14mdn_sia`.`guru`.`desa_kelurahan` AS `desa_kelurahan`,`sman14mdn_sia`.`guru`.`kecamatan` AS `kecamatan`,`sman14mdn_sia`.`guru`.`kode_pos` AS `kode_pos`,`sman14mdn_sia`.`detail_guru`.`sk_cpns` AS `sk_cpns`,`sman14mdn_sia`.`detail_guru`.`tanggal_cpns` AS `tanggal_cpns`,`sman14mdn_sia`.`detail_guru`.`sk_pengangkatan` AS `sk_pengangkatan`,`sman14mdn_sia`.`detail_guru`.`tmt_pengangkatan` AS `tmt_pengangkatan`,`sman14mdn_sia`.`detail_guru`.`lembaga_pengangkatan` AS `lembaga_pengangkatan`,`sman14mdn_sia`.`detail_guru`.`pangkat_golongan` AS `pangkat_golongan`,`sman14mdn_sia`.`detail_guru`.`sumber_gaji` AS `sumber_gaji`,`sman14mdn_sia`.`detail_guru`.`nama_ibu_kandung` AS `nama_ibu_kandung`,`sman14mdn_sia`.`detail_guru`.`status_perkawinan` AS `status_perkawinan`,`sman14mdn_sia`.`detail_guru`.`nama_suami_istri` AS `nama_suami_istri`,`sman14mdn_sia`.`detail_guru`.`nip_suami_istri` AS `nip_suami_istri`,`sman14mdn_sia`.`detail_guru`.`pekerjaan_suami_istri` AS `pekerjaan_suami_istri`,`sman14mdn_sia`.`detail_guru`.`tmt_pns` AS `tmt_pns`,`sman14mdn_sia`.`detail_guru`.`sudah_lisensi_kepsek` AS `sudah_lisensi_kepsek`,`sman14mdn_sia`.`detail_guru`.`pernah_diklat_kepengawasan` AS `pernah_diklat_kepengawasan`,`sman14mdn_sia`.`detail_guru`.`keahlian_braille` AS `keahlian_braille`,`sman14mdn_sia`.`detail_guru`.`keahlian_bahasa_isyarat` AS `keahlian_bahasa_isyarat`,`sman14mdn_sia`.`detail_guru`.`npwp` AS `npwp`,`sman14mdn_sia`.`detail_guru`.`nama_wajib_pajak` AS `nama_wajib_pajak`,`sman14mdn_sia`.`detail_guru`.`kewarganegaraan` AS `kewarganegaraan`,`sman14mdn_sia`.`detail_guru`.`bank` AS `bank`,`sman14mdn_sia`.`detail_guru`.`nomor_rekening_bank` AS `nomor_rekening_bank`,`sman14mdn_sia`.`detail_guru`.`rekening_atas_nama` AS `rekening_atas_nama`,`sman14mdn_sia`.`detail_guru`.`karpeg` AS `karpeg`,`sman14mdn_sia`.`detail_guru`.`karis_karsu` AS `karis_karsu`,`sman14mdn_sia`.`detail_guru`.`lintang` AS `lintang`,`sman14mdn_sia`.`detail_guru`.`bujur` AS `bujur`,`sman14mdn_sia`.`guru`.`foto` AS `foto` from (`sman14mdn_sia`.`detail_guru` left join `sman14mdn_sia`.`guru` on(`sman14mdn_sia`.`detail_guru`.`guru_id` = `sman14mdn_sia`.`guru`.`id_guru`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_guru`");
    }
};
