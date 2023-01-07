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
        $jadwal = jadwal_belajar_mengajar::OrderBy('jam_mulai')->OrderBy('jam_selesai')->OrderBy('hari')->where('jam_mulai', '<=', $jam)->where('jam_selesai', '>=', $jam)->get();
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
        return view('home', compact(
            'jadwal',
            'guru',
            'gurulk',
            'gurupr',
            'siswalk',
            'siswapr',
            'siswa',
            'mapel',
            'user',
        ));
    }
}
