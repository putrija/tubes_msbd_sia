<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_rapor extends Model
{
    use HasFactory;

    protected $fillable = ['kelas_siswa_id_old','kelas_siswa_id_new', 'mapel_id_old', 'mapel_id_new', 'wali_kelas_id_old', 'wali_kelas_id_new','semester_id_old', 'semester_id_new', 'semester_id_old', 
    'semester_id_new', 'nilai_pengetahuan_old', 'nilai_pengetahuan_new', 'predikat_pengetahuan_old', 'predikat_pengetahuan_new','nilai_keterampilan_old','nilai_keterampilan_new','predikat_keterampilan_old', 'predikat_keterampilan_new','status'];
    public $timestamps = false;

    protected $table = 'log_rapor';
}
