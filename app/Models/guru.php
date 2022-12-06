<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    use SoftDeletes;

    protected $fillable = ['id_card', 'nip', 'nama_guru', 'mapel_id', 'kode', 'jk', 'telp', 'tmp_lahir', 'tgl_lahir', 'foto', 'status_kepegawaian', 'hp', 'agama', 'alamat', 'rt', 'rw', 'nama_dusun', 'desa_kelurahan', 'kecamatan', 'kode_pos', 'email', 'nik', 'no_kk'];

    public function mapel()
    {
        return $this->belongsTo('App\Mapel')->withDefault();
    }

    protected $table = 'guru';
}
