<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_wali_kelas extends Model
{
    use HasFactory;

    protected $fillable = ['id_wali_kelas_old', 'id_wali_kelas_new', 'guru_id_old', 'guru_id_new', 'kelas_id_old', 'kelas_id_new', 'tahun_ajaran_id_old', 'tahun_ajaran_id_new', 'status'];
    public $timestamps = false;

    protected $table = 'log_wali_kelas';
    
}