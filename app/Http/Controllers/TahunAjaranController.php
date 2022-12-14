<?php

namespace App\Http\Controllers;

use App\Models\Tahun_ajaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tahun_ajaran::all();
        return view ('admin.tahun_ajaran.index', ['data'=>$data]);
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
        Tahun_ajaran::Create(
            [
               'tahun_ajaran' => $request->tahun_ajaran,
               'tanggal_mulai' => $request->tanggal_mulai,
               'tanggal_berakhir' => $request->tanggal_berakhir,
               'status' => $request->status,
            ]
        );

        return to_route('tahun_ajaran.index')->with('success', 'Tahun Ajaran berhasil ditambahkan!');
    }
   
    public function changeStatus(Request $request, $id)
    {
            $tahun_ajaran = Tahun_ajaran::findorfail($id);
            $tahun_ajaran->status = $request->status;
            $tahun_ajaran->status = 'Non Aktif';
            $tahun_ajaran->save();
            return redirect()->back()->with('success', 'Status berhasil dinonaktifkan');
    }

    public function changeStatus2(Request $request, $id)
    {
            $tahun_ajaran = Tahun_ajaran::findorfail($id);
            $tahun_ajaran->status = $request->status;
            $tahun_ajaran->status = 'Aktif';
            $tahun_ajaran->save();
            return redirect()->back()->with('success', 'Status berhasil diaktifkan');
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
