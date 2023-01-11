<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliKelas extends Model
{
    use HasFactory;

    protected $fillable = ['guru_id', 'kelas_id', 'tahun_ajaran_id'];

    protected $table = 'wali_kelas';

    public $timestamps = false;
}
