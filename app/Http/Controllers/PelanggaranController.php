<?php

namespace App\Http\Controllers;


use App\Kelas;
use App\Models\Siswa;
//use App\Models\Kelas_siswa;
use App\Models\Pelanggaran;
//use App\Models\Tahun_ajaran;
use Database\Seeders\TahunAjaranSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

use function GuzzleHttp\Promise\all;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pelanggaran = Pelanggaran::OrderBy('id', 'asc')->get();
        //$siswa = Siswa::with(relations:'kelas')->get();

        //$kelas_siswa = Kelas_siswa::all();
        //$kelas = Kelas::join('kelas','kelas.id','=','siswa.kelas_id');
        //$kelas = Kelas::orderBy('nama_kelas')->get();
        //$kelas = Kelas::all();
        //$tahun_ajaran = Tahun_ajaran::all();
        //by gideonsaran
        //$Pelanggaran = DB::table('pelanggaran')->join('siswa','siswa.id','=','kelas_siswa.id')->join('kelas','kelas.id','=','kelas_siswa.id')->join('tahun_ajaran','tahun_ajaran.id','=','kelas_siswa.id')->get() ;
        $pelanggaran = Pelanggaran::all();
        $siswa = Siswa::all();
        //$kelas = siswa::all();
        return view('admin.pelanggaran.pelanggaran', compact('pelanggaran','siswa'));
        //return view('admin.pelanggaran.pelanggaran', compact('pelanggaran','siswa'));
    }

    public function siswa()
    {
        $pengguna = User::where('id', Auth::id())->value('no_induk');
        $siswa = Siswa::where('no_induk', $pengguna)->value('id');
        $siswanya =  Siswa::where('no_induk', $pengguna)->get();
        $pelanggaran = Pelanggaran::where('siswa_id', $siswa)->get();
        return view('siswa.pelanggaran', compact('siswanya','pelanggaran','siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
            $pelanggaran = Pelanggaran::OrderBy('id', 'asc')->get();
            $siswa=Siswa::all();
            //$kelas=Kelas::all();
            //$tahun_ajaran=Tahun_ajaran::all();
            return view('admin.pelanggaran.pelanggaran');
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
            // $siswa=Siswa::all();
            // $kelas=Kelas::all();
            // $tahun_ajaran=Tahun_ajaran::all();

            //ini yang dipake
            Pelanggaran::create([//panggil model pelanggaran dan panggil fungsi create
            'siswa_id' => $request->siswa_id,
            'ket_pelanggaran'=>$request->ket_pelanggaran,
            'tanggal_pelanggaran'=>$request->tanggal_pelanggaran,
            'sanksi'=>$request->sanksi
             ]);
            //dd($request->all());

        return redirect()->back()->with('success', 'Data pelanggaran berhasil disimpan!');
        //return view('admin.pelanggaran.pelanggaran',compact('siswa','kelas','tahun_ajaran'));
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
