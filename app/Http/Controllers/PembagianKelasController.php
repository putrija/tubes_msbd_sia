<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class PembagianKelasController extends Controller
{
    public function index()
    {
     //$siswa = Siswa::leftjoin('siswa', 'kelas_siswa.siswa_id', '=', 'siswa.id')->get(['siswa.nama_siswa']);
     //$PembagianKelas = DB::table('kelas_siswa')->join('siswa','siswa.id','=','kelas_siswa.id')->join('kelas','kelas.id','=','kelas_siswa.id')->join('tahun_ajaran','tahun_ajaran.id','=','kelas_siswa.id')->get() ;
     $viewPembagianKelas = DB::table('view_pembagian_kelas')->get(); 
     return view('admin.pembagiankelas.index',compact('viewPembagianKelas'));
    }
}
