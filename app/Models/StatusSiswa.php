<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusSiswa extends Model
{
    protected $fillable = ['ket_status'];
    use HasFactory;
    protected $table = 'status_siswa';
}
