<?php

namespace App;

use App\Models\Pelanggaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama_kelas', 'ket_kelas', 'kurikulum_id','jurusan_id','guru_id'];

    public function guru()
    {
        return $this->belongsTo('App\Guru')->withDefault();
    }

    public function paket()
    {
        return $this->belongsTo('App\Paket')->withDefault();
    }
    public function siswa()
    {
        return $this->hasMany(related:Siswa::class);
    }
    public function pelanggaran()
    {
        return $this->hasManyThrough(related:Pelanggaran::class, through:Siswa::class);
    }
    public function SiswaPelanggaran(){
        return $this->hasManyThrough(Pelanggaran::class,Siswa::class,
        'kelas_id',
        'siswa_id',
        'id',
        'id',
    );
    }

    // public function pelanggaran(){
    //     return $this->hasMany('app\Models\Pelanggaran');
    // }

    //erli tambah relasi kepelanggaran
    // public function pelanggaran(){
    //     return $this->hasMany('app\Models\Pelanggaran');
    // }
    protected $table = 'kelas';
}
