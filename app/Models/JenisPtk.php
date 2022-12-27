<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPtk extends Model
{
    protected $fillable = ['id','ket_jenis_ptk'];
    use HasFactory;

    protected $table = 'jenis_ptk';
}
