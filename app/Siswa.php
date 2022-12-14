<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use SoftDeletes;

    // protected $fillable = ['no_induk', 'nis', 'nama_siswa', 'alamat', 'kelas_id', 'jk', 'telp', 'tmp_lahir', 'tgl_lahir', 'foto'];
    protected $fillable = ['no_induk', 'nis','nisn','angkatan','status_id','nama_siswa', 'kelas_id', 'jk', 'telp', 'tmp_lahir', 'tgl_lahir', 'foto', 'name', 'email', 'password', 'role', 'id_card', 'alamat', 'agama', 'created_at', 'updated_at', 'deleted_at'];
    // protected $fillable = ['no_induk', 'nis', 'nama_siswa'];
    public function kelas()
    {
        return $this->belongsTo('App\Kelas')->withDefault();
    }
    public function status()
    {
        return $this->belongsTo('App\Models\StatusSiswa')->withDefault();
    }

    public function ulangan($id)
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $nilai = Ulangan::where('siswa_id', $id)->where('guru_id', $guru->id)->first();
        return $nilai;
    }

    public function sikap($id)
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $nilai = Sikap::where('siswa_id', $id)->where('guru_id', $guru->id)->first();
        return $nilai;
    }

    public function nilai($id)
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $nilai = Rapot::where('siswa_id', $id)->where('guru_id', $guru->id)->first();
        return $nilai;
    }
    public function detail_siswa()
    {
        return $this->hasOne('App\Models\DetailSiswa')->withDefault();
    }

    protected $table = 'siswa';
}
