<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapot extends Model
{
    protected $fillable = ['nisn_siswa', 'kelas_siswa_id', 'mapel_id', 'wali_kelas_id', 'semester_id', 'nilai_pengetahuan', 'predikat_pengetahuan', 'nilai_keterampilan', 'predikat_keterampilan', 'tahun_ajaran_id'];

    protected $table = 'rapor';
}
