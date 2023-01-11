<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = DB::table('jurusan')
            ->select('jurusan.id', 'jurusan.ket_jurusan', 'jurusan.kurikulum_id', 'kurikulum.nama_kurikulum')
            ->join('kurikulum', 'jurusan.kurikulum_id', '=', 'kurikulum.id')
            ->get();
        // $jurusan = DB::select("CALL read_jurusan_kurikulum(1)");

        // dd('$jurusan');
        $kurikulum = Kurikulum::all();
        return view('admin.jurusan.index', compact('jurusan', 'kurikulum'));
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
            'ket_jurusan' => 'required',
            'kurikulum_id' => 'required',
        ]);

        Jurusan::updateOrCreate(
            [
                'id' => $request->jurusan_id
            ],
            [
                'ket_jurusan' => $request->ket_jurusan,
                'kurikulum_id' => $request->kurikulum_id,
            ]
        );

        return redirect()->back()->with('success', 'Data jurusan berhasil diperbarui!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $jurusan = DB::table('jurusan')
            ->select('jurusan.id', 'jurusan.ket_jurusan', 'jurusan.kurikulum_id', 'kurikulum.nama_kurikulum')
            ->join('kurikulum', 'jurusan.kurikulum_id', '=', 'kurikulum.id')
            ->where('jurusan.id', $id)->first();
        $kurikulum = Kurikulum::all();
        return view('admin.jurusan.edit', compact('jurusan', 'kurikulum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = DB::table('jurusan')
            ->join('kelas', 'jurusan.id', '=', 'kelas.jurusan_id')
            ->where('jurusan.id', $id);

        $jurusan->delete();

        $jurusan2 = DB::table('jurusan')
            ->where('jurusan.id', $id);
        $jurusan2->delete();

        return redirect()->back()->with('warning', 'Data jurusan berhasil dihapus!');
    }
}
