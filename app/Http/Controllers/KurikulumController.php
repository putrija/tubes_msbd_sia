<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurikulum = Kurikulum::all();
        return view('admin.kurikulum.index', compact('kurikulum'));
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
            'nama_kurikulum' => 'required',
        ]);

        Kurikulum::updateOrCreate(
            [
                'nama_kurikulum' => $request->nama_kurikulum,
            ],
            [
                'status' => $request->status
            ]
        );

        return redirect()->back()->with('success', 'Data Kurikulum berhasil diperbarui!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(Kurikulum $kurikulum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $kurikulum = Kurikulum::findorfail($id);
        return view('admin.kurikulum.edit', compact('kurikulum'));
        return redirect()->back()->with('success', 'Data Kurikulum berhasil diperbarui!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kurikulum $kurikulum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $kurikulum = DB::table('kurikulum')
        //     ->join('jurusan', 'kurikulum.id', '=', 'jurusan.kurikulum_id')
        //     ->join('mapel', 'kurikulum.id', '=', 'mapel.kurikulum_id')
        //     ->where('kurikulum.id', $id);

        // $kurikulum->delete();

        $kurikulum = DB::select("CALL delete_kurikulum(" . $id . ")");


        $kurikulum2 = DB::table('kurikulum')
            ->where('kurikulum.id', $id);
        $kurikulum2->delete();

        return redirect()->back()->with('warning', 'Data kurikulum berhasil dihapus! (Silahkan cek trash data kurikulum)');
    }
    public function changeStatus(Request $request, $id)
    {
            $kurikulum = Kurikulum::findorfail($id);
            $kurikulum->status = $request->status;
            $kurikulum->status = 'Non Aktif';
            $kurikulum->save();
            return redirect()->back()->with('success', 'Status berhasil dinonaktifkan');
    }
}
