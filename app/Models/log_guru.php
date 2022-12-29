<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_guru extends Model
{
    use HasFactory;

    protected $fillable = ['nama_guru_old','nama_guru_new','tmp_lahir_old','tmp_lahir_new','hp_old','hp_new','telp_old','telp_new','jk_old','jk_new','tgl_lahir_old','tgl_lahir_new','status'];
    public $timestamps = false;

    protected $table = 'log_guru';
    
}
