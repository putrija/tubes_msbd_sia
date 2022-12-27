<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    use SoftDeletes;

    protected $fillable = ['id_card_guru','nama_guru','kode_guru','nip','nuptk','status_kepegawaian_id','jenis_ptk_id','tugas_tambahan_id','jk','email','agama','hp','telp','tmp_lahir','tgl_lahir','nik','no_kk','alamat','rt','rw','nama_dusun','desa_kelurahan','kecamatan','kode_pos','foto'];
    public function jenis_ptk()
    {
        return $this->belongsTo('App\Models\JenisPtk')->withDefault();
    }
    public function tugas_tambahan_gur()
    {
        return $this->belongsTo('App\Models\TugasTambahanGuru')->withDefault();
    }
    public function status_kepegawaian()
    {
        return $this->belongsTo('App\Models\StatusKepegawaian')->withDefault();
    }

    protected $table = 'guru';
}
