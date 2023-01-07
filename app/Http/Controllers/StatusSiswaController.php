<?php

namespace App\Http\Controllers;

use App\Models\StatusSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusSiswaController extends Controller
{
    public function index()
    {       
            $data = StatusSiswa::all();
            return view ('admin.status_siswa.index', ['data'=>$data]);

    }
    public function create()
    {
        // 
    }
    public function store(Request $request)
    {
        StatusSiswa::Create(
            [
               'ket_status' => $request->ket_status
            ]
        );

        return to_route('status_siswa.index')->with('success', 'Status berhasil ditambahkan!');
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

        $status = DB::table('status_siswa')
        ->where('id', $id);
        $status->delete();

        return redirect()->back()->with('warning', 'Status berhasil dihapus!');
    }

}
