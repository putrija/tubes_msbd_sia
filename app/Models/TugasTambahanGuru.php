<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasTambahanGuru extends Model
{
    protected $fillable = ['id','ket_tugas_tambahan'];
    use HasFactory;
    protected $table = 'tugas_tambahan_guru';
}
