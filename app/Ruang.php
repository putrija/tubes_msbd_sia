<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $fillable = ['nama_ruang','jenis_ruang'];

    protected $table = 'ruang';
}
