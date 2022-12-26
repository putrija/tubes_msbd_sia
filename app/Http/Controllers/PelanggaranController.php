<?php

namespace App\Http\Controllers;


use App\Kelas;
use App\Models\Siswa;
//use App\Models\Kelas_siswa;
use App\Models\Pelanggaran;
use App\Models\Tahun_ajaran;
use Database\Seeders\TahunAjaranSeeder;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggaran = Pelanggaran::OrderBy('id', 'asc')->get();
        //$kelas_siswa = Kelas_siswa::all();
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        //$tahun_ajaran = Tahun_ajaran::all();
        //by gideonsaran
        //$Pelanggaran = DB::table('pelanggaran')->join('siswa','siswa.id','=','kelas_siswa.id')->join('kelas','kelas.id','=','kelas_siswa.id')->join('tahun_ajaran','tahun_ajaran.id','=','kelas_siswa.id')->get() ;
        return view('admin.pelanggaran.pelanggaran', compact('pelanggaran','siswa','kelas'));
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
        //erli bikin apa aja yg bisa diinput
        //$this->validate($request, [
            // Pelanggaran::created([
            //     'nama_siswa' => 'required',
            //     'nama_kelas' => 'required',
            //     'tahun_ajaran' => 'required',
            //     'ket_pelanggaran'=>'reqired',
            //     'tanggal_pelanggaran'=>'required',
            //     'sanksi'=>'required'
            // ]);
            $siswa=Siswa::all();
            $kelas=Kelas::all();
            $tahun_ajaran=Tahun_ajaran::all();
            Pelanggaran::create([
            'nama_siswa' => $request->nama_siswa,
            'siswa_id' => $request->siswa_id,
            'kelas_id' => $request->kelas_id,
            'tahun_ajaran_id'=>$request->tahun_ajaran_id,
            'ket_pelanggaran'=>$request->ket_pelanggaran,
            'tanggal_pelanggaran'=>$request->tanggal_pelanggaran,
            'sanksi'=>$request->sanksi
        ]);

        //return redirect()->back()->with('success', 'Data mapel berhasil disimpan!');
        return view('pelanggaran.pelanggaran',compact('siswa','kelas','tahun_ajaran'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
