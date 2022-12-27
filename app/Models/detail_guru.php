<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detail_guru extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nuptk', 'jenis_ptk', 'tugas_tambahan', 'sk_cpns', 'tanggal_cpns', 'sk_pengangkatan', 'tmt_pengangkatan', 'lembaga_pengangkatan', 'pangkat_golongan', 'sumber_gaji', 'nama_ibu_kandung', 'status_perkawinan', 'nama_suami_istri', 'nip_suami_istri', 'pekerjaan_suami_istri', 'tmt_pns', 'sudah_lisensi_kepsek', 'pernah_diklat_kepengawasan', 'keahlian_braille', 'keahlian_bahasa_isyarat', 'npwp', 'nama_wajib_pajak', 'kewarganegaraan', 'bank', 'nomor_rekening_bank', 'rekening_atas_nama', 'karpeg', 'karis_karsu', 'lintang', 'bujur', 'nuks'];
    public $timestamps = false;

    protected $table = 'detail_guru';
}
