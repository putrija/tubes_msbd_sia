<?php

namespace App\Http\Controllers;

use App\Models\TugasTambahanGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasTambahanGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
            $data = TugasTambahanGuru::all();
            return view ('admin.tugastambahanguru.index', ['data'=>$data]);

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

        TugasTambahanGuru::Create(
            [
               'ket_tugas_tambahan' => $request->ket_tugas_tambahan
            ]
        );

        return to_route('tugastambahanguru.index')->with('success', 'Status berhasil diperbarui!');
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

        $status = DB::table('tugas_tambahan_guru')
        ->where('id', $id);
        $status->delete();

        return redirect()->back()->with('warning', 'status berhasil dihapus!');
    }
}
