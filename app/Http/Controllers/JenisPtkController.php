<?php

namespace App\Http\Controllers;

use App\Models\JenisPtk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class JenisPtkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
            $data = JenisPtk::all();
            return view ('admin.jenisptk.index', ['data'=>$data]);

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

        JenisPtk::Create(
            [
               'ket_jenis_ptk' => $request->ket_jenis_ptk
            ]
        );

        return to_route('jenisptk.index')->with('success', 'Status berhasil diperbarui!');
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
        $jenis_ptk = DB::table('jenis_ptk')
            ->select('jenis_ptk.id', 'jenis_ptk.ket_jenis_ptk')
            ->where('jenis_ptk.id', $id)->first();
        return view('admin.jenisptk.edit', compact('jenis_ptk'));
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
    //     $this->validate($request, [
    //         'ket_jenis_ptk' => 'required',
    //     ]);
    //     $jenis_ptk = JenisPtk::findorfail($id);

    
    // $jenis_ptk = [
    //     'ket_jenis_ptk' => $request -> ket_jenis_ptk,
    // ];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $status = DB::table('jenis_ptk')
        ->where('id', $id);
        $status->delete();

        return redirect()->back()->with('warning', 'status berhasil dihapus!');
    }
}
