<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Guru;
// use App\Kehadiran;
use App\Kelas;
use App\Siswa;
use App\Mapel;
use App\Models\jadwal_belajar_mengajar;
use App\User;
use App\Paket;
use App\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$hari = date('w');
        $jam = date('H:i');
        $jadwal = DB::table('jadwal_belajar_mengajar')
            ->select('jadwal_belajar_mengajar.id', 'jadwal_belajar_mengajar.jam_mulai', 'jadwal_belajar_mengajar.jam_selesai', 'jadwal_belajar_mengajar.hari', 'mapel.nama_mapel', 'kelas.nama_kelas', 'ruang.nama_ruang', 'guru.nama_guru')
            ->join('guru_mengajar', 'jadwal_belajar_mengajar.guru_mengajar_id', '=', 'guru_mengajar.id')
            ->join('guru', 'guru_mengajar.guru_id', '=', 'guru.id')
            ->join('mapel', 'guru_mengajar.mapel_id', '=', 'mapel.id')
            ->join('kelas', 'jadwal_belajar_mengajar.kelas_id', '=', 'kelas.id')
            ->join('ruang', 'jadwal_belajar_mengajar.ruang_id', '=', 'ruang.id')
            ->OrderBy('jam_mulai')->OrderBy('jam_selesai')->OrderBy('hari')->where('jam_mulai', '<=', $jam)->where('jam_selesai', '>=', $jam)->get();
        // $pengumuman = Pengumuman::first();
        // $kehadiran = Kehadiran::all();
        return view('home', compact('jadwal'));
    }

    public function index_siswa()
    {
        //$hari = date('w');
        $jam = date('H:i');
        $jadwal = jadwal_belajar_mengajar::OrderBy('jam_mulai')->OrderBy('jam_selesai')->OrderBy('hari')->where('jam_mulai', '<=', $jam)->where('jam_selesai', '>=', $jam)->get();
        // $nama = Auth::user()->name;
        // $pengumuman = Pengumuman::first();
        // $kehadiran = Kehadiran::all();
        return view('home-siswa', compact('jadwal'));
    }

    public function admin()
    {
        $jadwal = jadwal_belajar_mengajar::count();
        $guru = Guru::count();
        $gurulk = Guru::where('jk', 'L')->count();
        $gurupr = Guru::where('jk', 'P')->count();
        $siswa = Siswa::count();
        $siswalk = Siswa::where('jk', 'L')->count();
        $siswapr = Siswa::where('jk', 'P')->count();
        $mapel = Mapel::count();
        $user = User::count();
        $kelas = Kelas::count();
        return view('admin.index', compact(
            'jadwal',
            'guru',
            'gurulk',
            'gurupr',
            'siswalk',
            'siswapr',
            'siswa',
            'mapel',
            'user',
            'kelas'
        ));
    }
}
