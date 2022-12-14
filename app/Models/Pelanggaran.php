<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    //use HasFactory;
    //protected $fillable = ['siswa_id','kelas_id','tahun_ajaran_id','ket_pelanggaran', 'tanggal_pelanggaran', 'sanksi'];
    protected $fillable = ['siswa_id','ket_pelanggaran', 'tanggal_pelanggaran', 'sanksi'];
    //cara lama membuat relasi
    // public function siswa(){
    //     return $this->belongsTo('app\Models\Siswa');
    // }
    //membuat relasi ketabel siswa
    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

    // public function kelas(){
    //     return $this->BelongsTo('app\Kelas');
    // }

    // public function tahun_ajaran(){
    //     return $this->belongsTo('App\Models\Tahun_ajaran');
    // }



    protected $table = 'pelanggaran';
}
