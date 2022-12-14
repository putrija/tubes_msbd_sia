<?php

namespace App\Models;

use App\Kelas;
use App\Siswa as AppSiswa;
use Auth;
use FontLib\TrueType\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    public Collection $siswa;
    //public Collection $selectedSiswa;
    use SoftDeletes;

    // protected $fillable = ['no_induk', 'nis', 'nama_siswa', 'alamat', 'kelas_id', 'jk', 'telp', 'tmp_lahir', 'tgl_lahir', 'foto'];
    protected $fillable = ['no_induk', 'nisn', 'nama_siswa', 'kelas_id', 'jk', 'telp', 'tmp_lahir', 'tgl_lahir', 'foto', 'name', 'email', 'password', 'role', 'id_card', 'alamat', 'agama', 'created_at', 'updated_at', 'deleted_at'];
    //relasi lama
    // public function kelas()
    // {
    //     return $this->belongsTo('App\Kelas')->withDefault();
    // }
    
    public $selecAll = false;
    public $bulkDisabled = true;
    public $selectSiswa = false;
    public $Siswa = [];
    public $designTemplate = 'tailwind';

    public function mount()
    {
      $this->siswa = Siswa::orderBy('id')->get();
      $this->selectedSiswa = collect();

    }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function pelanggaran(){
        return $this->hasMany(Pelanggaran::class);
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

    //erli bikin relasi siswa punya pelanggaran
    // public function pelanggaran(){
    //     return $this->hasMany('app\Pelanggaran');
    // }
    //karena siswa ga langsung berellasi kepelanggara tapi lewat tabel kelas_siswa dulu dulu
    //erli-- relasi kelas_siswa dengan siswa
    //cara lama merelasikan pelanggaran dengan siswa
    // public function pelanggaran(){
    //     return $this->hasMany('app\Models\Pelanggaran');
    // }

    

    protected $table = 'siswa';
}
