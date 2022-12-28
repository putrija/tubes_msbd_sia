<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_belajar_mengajar extends Model
{
    protected $fillable = ['guru_mengajar_id', 'kelas_id', 'ruang_id', 'hari', 'jam_mulai', 'jam_selesai'];

    use HasFactory;

    protected $table = 'jadwal_belajar_mengajar';
}
