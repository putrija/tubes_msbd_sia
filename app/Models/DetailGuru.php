<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailGuru extends Model
{
    protected $fillale =['id','guru_id','sk_cpns','tanggal_cpns','sk_pengangkatan','tmt_pengangkatan','lembaga_pengangkatan','pangkat_golongan','sumber_gaji','nama_ibu_kandung','status_perkawinan','nama_suami_istri','nip_suami_istri','pekerjaan_suami_istri','tmt_pns','sudah_lisensi_kepsek','pernah_diklat_pengawasan','keahlian_braille','keahlian_bahasa_isyarat','npwp','nama_wajib_pajak','kewarganegaraan','bank','nomor_rekening_bank','rekening_atas_nam','karpeg','karis_karsu','lintang','bujur'];
    use HasFactory;
    protected $table = 'detail_guru';
}
