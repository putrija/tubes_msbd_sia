<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSiswa extends Model
{
    protected $fillable = ['anak_ke','dari_berapa_bersaudara','diterima_di_kelas','diterima_pada_tanggal','diterima_semester','sekolah_asal','alamat_sekolah_asal','tahun_ijazah_smp','nomor_ijazah_smp','tahun_skhun_smp','nomor_skhun_smp','nama_ayah','nama_ibu','alamat_ayah','alamat_ibu','tlp_ayah','tlp_ibu','pekerjaan_ayah','pekerjaan_ibu','nama_wali','pekerjaan_wali','alamat_wali','tlp_wali'];
    use HasFactory;
    protected $table = 'detail_siswa';

    public function siswa()
    {
        return $this->hasOne('App\Models\Siswa')->withDefault();
    }
}
