<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama_siswa_old','nama_siswa_new', 'jk_old', 'jk_new', 'tmp_lahir_old', 'tmp_lahir_new','tgl_lahir_old', 'tgl_lahir_new', 'alamat_old', 
    'alamat_new', 'nisn_old', 'nisn_new', 'kelas_id_old', 'kelas_id_new','telp_old','telp_new','status'];
    public $timestamps = false;

    protected $table = 'log_siswa';
    
}