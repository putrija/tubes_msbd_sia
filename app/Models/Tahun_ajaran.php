<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun_ajaran extends Model
{
    //use HasFactory;
    protected $fillable = ['tahun_ajaran','tanggal_mulai','tanggal_berakhir','status'];

    // public function pelanggaran(){
    //     return $this->hasMany('app\Models\Pelanggaran');
    // }
    

    protected $table = 'tahun_ajaran';
}
