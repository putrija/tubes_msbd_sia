<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Mapel;
// use App\Paket;
use App\Guru;
use App\Models\jadwal_belajar_mengajar;
use App\Models\Kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mapel = Mapel::OrderBy('kelompok', 'asc')->OrderBy('nama_mapel', 'asc')->get();
        // $mapel = Mapel::all();
        $mapel = DB::table('mapel')
            ->select('mapel.id', 'mapel.nama_mapel', 'mapel.kurikulum_id', 'kurikulum.nama_kurikulum')
            ->join('kurikulum', 'mapel.kurikulum_id', '=', 'kurikulum.id')
            ->get();
        $kurikulum = Kurikulum::all();
        // $paket = Paket::all();
        return view('admin.mapel.index', compact('mapel', 'kurikulum'));
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
            'nama_mapel' => 'required',
            'kurikulum_id' => 'required',
        ]);

        Mapel::updateOrCreate(
            [
                'id' => $request->mapel_id
            ],
            [
                'nama_mapel' => $request->nama_mapel,
                'kurikulum_id' => $request->kurikulum_id,
            ]
        );

        return redirect()->back()->with('success', 'Data mapel berhasil diperbarui!');
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
        $mapel = DB::table('mapel')
            ->select('mapel.id', 'mapel.nama_mapel', 'mapel.kurikulum_id', 'kurikulum.nama_kurikulum')
            ->join('kurikulum', 'mapel.kurikulum_id', '=', 'kurikulum.id')
            ->where('mapel.id', $id)->first();
        // $mapel = Mapel::findorfail($id);
        $kurikulum = Kurikulum::all();
        return view('admin.mapel.edit', compact('mapel', 'kurikulum'));
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
        // $mapel = Mapel::findorfail($id);
        // $countJadwal = jadwal_belajar_mengajar::where('mapel_id', $mapel->id)->count();
        // if ($countJadwal >= 1) {
        //     $jadwal = Jadwal::where('mapel_id', $mapel->id)->delete();
        // } else {
        // }
        // $countGuru = Guru::where('mapel_id', $mapel->id)->count();
        // if ($countGuru >= 1) {
        //     $guru = Guru::where('mapel_id', $mapel->id)->delete();
        // } else {
        // }
        // $mapel->delete();

        // $mapel = DB::table('mapel')
        //     // ->select('mapel.id', 'mapel.nama_mapel', 'mapel.kurikulum_id', 'kurikulum.nama_kurikulum')
        //     ->join('guru_mengajar', 'mapel.id', '=', 'guru_mengajar.mapel_id')
        //     ->join('jadwal_belajar_mengajar', 'guru_mengajar.id', '=', 'jadwal_belajar_mengajar.guru_mengajar_id')
        //     ->where('mapel.id', $id);

        // $mapel->delete();

        $mapel = DB::select("CALL delete_mapel(" . $id . ")");
        // dd($mapel);


        // $mapel2 = DB::table('mapel')
        //     ->where('mapel.id', $id);
        // $mapel2->delete();

        return redirect()->back()->with('warning', 'Data mapel berhasil dihapus! (Silahkan cek trash data mapel)');
    }

    public function trash()
    {
        $mapel = Mapel::onlyTrashed()->get();
        return view('admin.mapel.trash', compact('mapel'));
    }

    public function restore($id)
    {
        $id = Crypt::decrypt($id);
        $mapel = Mapel::withTrashed()->findorfail($id);
        $countJadwal = Jadwal::withTrashed()->where('mapel_id', $mapel->id)->count();
        if ($countJadwal >= 1) {
            $jadwal = Jadwal::withTrashed()->where('mapel_id', $mapel->id)->restore();
        } else {
        }
        $countGuru = Guru::withTrashed()->where('mapel_id', $mapel->id)->count();
        if ($countGuru >= 1) {
            $guru = Guru::withTrashed()->where('mapel_id', $mapel->id)->restore();
        } else {
        }
        $mapel->restore();
        return redirect()->back()->with('info', 'Data mapel berhasil direstore! (Silahkan cek data mapel)');
    }

    public function kill($id)
    {
        $mapel = Mapel::withTrashed()->findorfail($id);
        $countJadwal = Jadwal::withTrashed()->where('mapel_id', $mapel->id)->count();
        if ($countJadwal >= 1) {
            $jadwal = Jadwal::withTrashed()->where('mapel_id', $mapel->id)->forceDelete();
        } else {
        }
        $countGuru = Guru::withTrashed()->where('mapel_id', $mapel->id)->count();
        if ($countGuru >= 1) {
            $guru = Guru::withTrashed()->where('mapel_id', $mapel->id)->forceDelete();
        } else {
        }
        $mapel->forceDelete();
        return redirect()->back()->with('success', 'Data mapel berhasil dihapus secara permanent');
    }

    public function getMapelJson(Request $request)
    {
        $jadwal = Jadwal::OrderBy('mapel_id', 'asc')->where('kelas_id', $request->kelas_id)->get();
        $jadwal = $jadwal->groupBy('mapel_id');

        foreach ($jadwal as $val => $data) {
            $newForm[] = array(
                'mapel' => $data[0]->pelajaran($val)->nama_mapel,
                'guru' => $data[0]->pengajar($data[0]->guru_id)->id
            );
        }

        return response()->json($newForm);
    }
}
