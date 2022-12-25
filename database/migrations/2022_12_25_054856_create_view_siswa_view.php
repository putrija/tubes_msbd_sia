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
        DB::statement("CREATE VIEW `view_siswa` AS select `sman14mdn_sia`.`siswa`.`no_induk` AS `no_induk`,`sman14mdn_sia`.`siswa`.`nisn` AS `nisn`,`sman14mdn_sia`.`siswa`.`nama_siswa` AS `nama_siswa`,`sman14mdn_sia`.`siswa`.`jk` AS `jk`,`sman14mdn_sia`.`siswa`.`agama` AS `agama`,`sman14mdn_sia`.`siswa`.`telp` AS `telp`,`sman14mdn_sia`.`siswa`.`tmp_lahir` AS `tmp_lahir`,`sman14mdn_sia`.`siswa`.`tgl_lahir` AS `tgl_lahir`,`sman14mdn_sia`.`siswa`.`alamat` AS `alamat`,`sman14mdn_sia`.`siswa`.`email` AS `email`,`sman14mdn_sia`.`siswa`.`angkatan` AS `angkatan`,`sman14mdn_sia`.`siswa`.`foto` AS `foto`,`sman14mdn_sia`.`siswa`.`status_id` AS `status_id`,`sman14mdn_sia`.`detail_siswa`.`anak_ke` AS `anak_ke`,`sman14mdn_sia`.`detail_siswa`.`dari_berapa_bersaudara` AS `dari_berapa_bersaudara`,`sman14mdn_sia`.`detail_siswa`.`diterima_di_kelas` AS `diterima_di_kelas`,`sman14mdn_sia`.`detail_siswa`.`diterima_pada_tanggal` AS `diterima_pada_tanggal`,`sman14mdn_sia`.`detail_siswa`.`diterima_semester` AS `diterima_semester`,`sman14mdn_sia`.`detail_siswa`.`sekolah_asal` AS `sekolah_asal`,`sman14mdn_sia`.`detail_siswa`.`alamat_sekolah_asal` AS `alamat_sekolah_asal`,`sman14mdn_sia`.`detail_siswa`.`tahun_ijazah_smp` AS `tahun_ijazah_smp`,`sman14mdn_sia`.`detail_siswa`.`nomor_ijazah_smp` AS `nomor_ijazah_smp`,`sman14mdn_sia`.`detail_siswa`.`tahun_skhun_smp` AS `tahun_skhun_smp`,`sman14mdn_sia`.`detail_siswa`.`nomor_skhun_smp` AS `nomor_skhun_smp`,`sman14mdn_sia`.`detail_siswa`.`nama_ayah` AS `nama_ayah`,`sman14mdn_sia`.`detail_siswa`.`nama_ibu` AS `nama_ibu`,`sman14mdn_sia`.`detail_siswa`.`alamat_ayah` AS `alamat_ayah`,`sman14mdn_sia`.`detail_siswa`.`alamat_ibu` AS `alamat_ibu`,`sman14mdn_sia`.`detail_siswa`.`tlp_ayah` AS `tlp_ayah`,`sman14mdn_sia`.`detail_siswa`.`tlp_ibu` AS `tlp_ibu`,`sman14mdn_sia`.`detail_siswa`.`pekerjaan_ayah` AS `pekerjaan_ayah`,`sman14mdn_sia`.`detail_siswa`.`pekerjaan_ibu` AS `pekerjaan_ibu`,`sman14mdn_sia`.`detail_siswa`.`nama_wali` AS `nama_wali`,`sman14mdn_sia`.`detail_siswa`.`pekerjaan_wali` AS `pekerjaan_wali`,`sman14mdn_sia`.`detail_siswa`.`alamat_wali` AS `alamat_wali`,`sman14mdn_sia`.`detail_siswa`.`tlp_wali` AS `tlp_wali` from (`sman14mdn_sia`.`detail_siswa` left join `sman14mdn_sia`.`siswa` on(`sman14mdn_sia`.`detail_siswa`.`id_siswa` = `sman14mdn_sia`.`siswa`.`id_siswa`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_siswa`");
    }
};
