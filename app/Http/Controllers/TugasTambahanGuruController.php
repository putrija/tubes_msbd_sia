<?php

namespace App\Http\Controllers;

use App\Models\TugasTambahanGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

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
        dd($request->all());
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
        $id = Crypt::decrypt($id);
        $tugas_tambahan_guru = DB::table('tugas_tambahan_guru')
            ->select('tugas_tambahan_guru.id', 'tugas_tambahan_guru.ket_tugas_tambahan')
            ->where('tugas_tambahan_guru.id', $id)->first();
        return view('admin.tugastambahanguru.edit', compact('tugas_tambahan_guru'));
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
        // dd($request->all());
        $tugas_tambahan = TugasTambahanGuru::find($id);
        $tugas_tambahan->ket_tugas_tambahan = $request->ket_tugas_tambahan;
        $tugas_tambahan->save();
        return to_route('tugastambahanguru.index')->with('success', 'Status berhasil diperbarui!');
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
