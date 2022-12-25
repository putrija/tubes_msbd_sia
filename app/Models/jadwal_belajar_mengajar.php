<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_belajar_mengajar extends Model
{
    protected $fillable = ['hari', 'jam_mulai', 'jam_berakhir'];

    use HasFactory;

    protected $table = 'jadwal_belajar_mengajar';
}
