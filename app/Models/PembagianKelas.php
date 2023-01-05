<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembagianKelas extends Model
{
    protected $fillable = ['siswa_id','kelas_id','tahun_ajaran_id',];
    use HasFactory;
    protected $table = 'kelas_siswa';
}
