<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_jadwal_belajar_mengajar extends Model
{
    use HasFactory;

    protected $fillable = ['guru_mengajar_id_old','guru_mengajar_id_new','ruang_id_old','ruang_id_new','kelas_id_old','kelas_id_new','hari_old','hari_new','jam_mulai_old','jam_mulai_new','jam_selesai_lahir_old','jam_selesai_lahir_new','status'];
    public $timestamps = false;

    protected $table = 'log_jadwal_belajar_mengajar';
    
}
