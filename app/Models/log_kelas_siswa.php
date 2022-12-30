<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_kelas_siswa extends Model
{
    use HasFactory;

    protected $fillable = ['siswa_id_old', 'siswa_id_new', 'kelas_id_old', 'kelas_id_new', 'tahun_ajaran_id_old', 'tahun_ajaran_id_new', 'status'];
    public $timestamps = false;

    protected $table = 'log_kelas_siswa';
    
}