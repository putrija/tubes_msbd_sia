<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Kelas;
use App\Models\Tahun_ajaran;
use App\Models\WaliKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class WaliKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wali_kelas = DB::table('wali_kelas')
            ->select('wali_kelas.id', 'guru.nama_guru', 'kelas.nama_kelas', 'tahun_ajaran.tahun_ajaran')
            ->join('guru', 'wali_kelas.guru_id', '=', 'guru.id')
            ->join('kelas', 'wali_kelas.kelas_id', '=', 'kelas.id')
            ->join('tahun_ajaran', 'wali_kelas.tahun_ajaran_id', '=', 'tahun_ajaran.id')
            ->OrderBy('tahun_ajaran.tahun_ajaran', 'asc')
            ->OrderBy('kelas.nama_kelas', 'asc')
            ->get();
        $kelas = Kelas::all();
        $guru = Guru::all();
        $tahun_ajaran = Tahun_ajaran::all();
        return view('admin.WaliKelas.index', compact('wali_kelas', 'kelas', 'guru', 'tahun_ajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kelas_id' => 'required',
            'guru_id' => 'required',
            'tahun_ajaran_id' => 'required',
        ]);

        WaliKelas::updateOrCreate(
            [
                'id' => $request->wali_kelas_id
            ],
            [
                'kelas_id' => $request->kelas_id,
                'guru_id' => $request->guru_id,
                'tahun_ajaran_id' => $request->tahun_ajaran_id,
            ]
        );

        return redirect()->back()->with('success', 'Data Wali Kelas berhasil diperbarui!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WaliKelas  $waliKelas
     * @return \Illuminate\Http\Response
     */
    public function show(WaliKelas $waliKelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WaliKelas  $waliKelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);

        $wali_kelas = DB::table('wali_kelas')
            ->select('wali_kelas.id', 'wali_kelas.kelas_id', 'wali_kelas.guru_id', 'wali_kelas.tahun_ajaran_id', 'guru.nama_guru', 'kelas.nama_kelas', 'tahun_ajaran.tahun_ajaran')
            ->join('guru', 'wali_kelas.guru_id', '=', 'guru.id')
            ->join('kelas', 'wali_kelas.kelas_id', '=', 'kelas.id')
            ->join('tahun_ajaran', 'wali_kelas.tahun_ajaran_id', '=', 'tahun_ajaran.id')
            ->where('wali_kelas.id', $id)->first();
        $kelas = Kelas::all();
        $guru = Guru::all();
        $tahun_ajaran = Tahun_ajaran::all();
        return view('admin.WaliKelas.edit', compact('wali_kelas', 'kelas', 'guru', 'tahun_ajaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WaliKelas  $waliKelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WaliKelas $waliKelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WaliKelas  $waliKelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wali_kelas = DB::table('wali_kelas')
            ->join('rapor', 'wali_kelas.id', '=', 'rapor.wali_kelas_id')
            ->where('wali_kelas.id', $id);

        $wali_kelas->delete();

        $wali_kelas2 = DB::table('wali_kelas')
            ->where('wali_kelas.id', $id);
        $wali_kelas2->delete();

        return redirect()->back()->with('warning', 'Data Wali Kelas berhasil dihapus!');
    }
}
