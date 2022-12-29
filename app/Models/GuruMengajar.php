<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruMengajar extends Model
{
    use HasFactory;
    protected $fillable = ['guru_id', 'mapel_id', 'tahun_ajaran_id'];

    protected $table = 'guru_mengajar';
}
