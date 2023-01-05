<?php

namespace App\Http\Controllers;

//use Auth;
use App\Jadwal;
use App\Hari;
use App\Kelas;
use App\Guru;
use App\Siswa;
use App\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\PDF;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Exports\JadwalExport;
use App\Imports\JadwalImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\GuruMengajar;
use App\Models\jadwal_belajar_mengajar;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::OrderBy('nama_kelas', 'asc')->get();
        $ruang = Ruang::all();
        $guru = GuruMengajar::all();
        $guru_mengajar = DB::table('guru_mengajar')
            ->select(
                'guru_mengajar.id',
                'guru.nama_guru',
                'mapel.nama_mapel',
            )
            ->join('guru', 'guru_mengajar.guru_id', '=', 'guru.id')
            ->join('mapel', 'guru_mengajar.mapel_id', '=', 'mapel.id')
            ->get();

        return view('admin.jadwal.index', compact('kelas', 'guru', 'ruang', 'guru_mengajar'));
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

    public function store2(Request $request) //untuk tambahkan data jadwal
    {
        $data = array();
        $data['hari'] = $request->hari;
        $data['kelas_id'] = $request->kelas_id;
        $data['guru_mengajar_id'] = $request->guru_mengajar_id;
        $data['jam_mulai'] = $request->jam_mulai;
        $data['jam_selesai'] = $request->jam_selesai;
        $data['ruang_id'] = $request->ruang_id;


        DB::table('jadwal_belajar_mengajar')
            ->select(
                'jadwal_belajar_mengajar.id',
                'jadwal_belajar_mengajar.hari',
                'jadwal_belajar_mengajar.guru_mengajar_id',
                'guru_mengajar.kelas_id',
                // 'guru_mengajar.guru_id',
                'guru_mengajar.mapel_id',
                'jadwal_belajar_mengajar.jam_mulai',
                'jadwal_belajar_mengajar.jam_selesai',
                'jadwal_belajar_mengajar.ruang_id'
            )
            ->join('guru_mengajar', 'jadwal_belajar_mengajar.guru_mengajar_id', '=', 'guru_mengajar.id')
            ->join('mapel', 'guru_mengajar.mapel_id', '=', 'mapel.id')
            ->join('guru', 'guru_mengajar.guru_id', '=', 'guru.id')
            ->join('ruang', 'jadwal_belajar_mengajar.ruang_id', '=', 'ruang.id')
            ->insert($data);

        return redirect()->back()->with('success', 'Data jadwal berhasil diperbarui!');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'hari' => 'required',
        //     'kelas_id' => 'required',
        //     'guru_mengajar_id' => 'required',
        //     'jam_mulai' => 'required',
        //     'jam_selesai' => 'required',
        //     'ruang_id' => 'required',
        // ]);

        // $guru = Guru::findorfail($request->guru_id);
        // // jadwal_belajar_mengajar::updateOrCreate(
        // //     [
        // //         'id' => $request->jadwal_id
        // //     ],
        // //     [
        // //         'hari_id' => $request->hari,
        // //         'kelas_id' => $request->kelas_id,
        // //         'mapel_id' => $guru->mapel_id,
        // //         'guru_id' => $request->guru_id,
        // //         'jam_mulai' => $request->jam_mulai,
        // //         'jam_selesai' => $request->jam_selesai,
        // //         'ruang_id' => $request->ruang_id,
        // //     ]
        // // );

        // $id = $request->jadwal_id;

        // $data = array(
        //     'hari' => $request->hari,
        //     'kelas_id' => $request->kelas_id,
        //     // 'mapel_id' => $guru->mapel_id,
        //     'guru_mengajar_id' => $request->guru_mengajar_id,
        //     'jam_mulai' => $request->jam_mulai,
        //     'jam_selesai' => $request->jam_selesai,
        //     'ruang_id' => $request->ruang_id,
        // );

        // $result = DB::table('jadwal_belajar_mengajar')
        //     ->select(
        //         'jadwal_belajar_mengajar.id',
        //         'jadwal_belajar_mengajar.hari',
        //         'jadwal_belajar_mengajar.kelas_id',
        //         'jadwal_belajar_mengajar.guru_mengajar_id',
        //         'guru_mengajar.mapel_id',
        //         'jadwal_belajar_mengajar.jam_mulai',
        //         'jadwal_belajar_mengajar.jam_selesai',
        //         'jadwal_belajar_mengajar.ruang_id'
        //     )
        //     ->join('guru_mengajar', 'jadwal_belajar_mengajar.guru_mengajar_id', '=', 'guru_mengajar.id')
        //     ->join('mapel', 'guru_mengajar.mapel_id', '=', 'mapel.id')
        //     ->join('guru', 'guru_mengajar.guru_id', '=', 'guru.id')
        //     ->join('ruang', 'jadwal_belajar_mengajar.ruang_id', '=', 'ruang.id')
        //     ->updateOrInsert(['jadwal_belajar_mengajar.id' => $id], $data);

        // return redirect()->back()->with('success', 'Data jadwal berhasil diperbarui!');

        $data = array();
        $data['hari'] = $request->hari;
        $data['kelas_id'] = $request->kelas_id;
        $data['guru_mengajar_id'] = $request->guru_mengajar_id;
        $data['jam_mulai'] = $request->jam_mulai;
        $data['jam_selesai'] = $request->jam_selesai;
        $data['ruang_id'] = $request->ruang_id;

        $id = $request->jadwal_id;


        DB::table('jadwal_belajar_mengajar')
            ->select(
                'jadwal_belajar_mengajar.id',
                'jadwal_belajar_mengajar.hari',
                'jadwal_belajar_mengajar.guru_mengajar_id',
                'guru_mengajar.mapel_id',
                'jadwal_belajar_mengajar.jam_mulai',
                'jadwal_belajar_mengajar.jam_selesai',
                'jadwal_belajar_mengajar.ruang_id'
            )
            ->join('guru_mengajar', 'jadwal_belajar_mengajar.guru_mengajar_id', '=', 'guru_mengajar.id')
            ->join('mapel', 'guru_mengajar.mapel_id', '=', 'mapel.id')
            ->join('guru', 'guru_mengajar.guru_id', '=', 'guru.id')
            ->join('ruang', 'jadwal_belajar_mengajar.ruang_id', '=', 'ruang.id')
            ->updateOrInsert(['jadwal_belajar_mengajar.id' => $id], $data);

        return redirect()->back()->with('success', 'Data jadwal berhasil diperbarui!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Crypt::decrypt($id);
        $kelas = Kelas::findorfail($id);
        // $jadwal = jadwal_belajar_mengajar::OrderBy('hari', 'asc')->OrderBy('jam_mulai', 'asc')->where('kelas_id', $id)->get();
        $jadwal = DB::table('jadwal_belajar_mengajar')
            ->select('jadwal_belajar_mengajar.id', 'jadwal_belajar_mengajar.hari', 'jadwal_belajar_mengajar.kelas_id', 'mapel.nama_mapel', 'guru.nama_guru', 'jadwal_belajar_mengajar.jam_mulai', 'jadwal_belajar_mengajar.jam_selesai', 'ruang.nama_ruang')
            ->join('guru_mengajar', 'jadwal_belajar_mengajar.guru_mengajar_id', '=', 'guru_mengajar.id')
            ->join('mapel', 'guru_mengajar.mapel_id', '=', 'mapel.id')
            ->join('guru', 'guru_mengajar.guru_id', '=', 'guru.id')
            ->join('ruang', 'jadwal_belajar_mengajar.ruang_id', '=', 'ruang.id')
            // ->where('jadwal_belajar_mengajar.id', $id)
            ->OrderBy('hari', 'asc')->OrderBy('jam_mulai', 'asc')->where('jadwal_belajar_mengajar.kelas_id', $id)->whereNull('jadwal_belajar_mengajar.deleted_at')->get();
        // ->first();
        return view('admin.jadwal.show', compact('jadwal', 'kelas'));
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
        // $jadwal = Jadwal::findorfail($id);
        $jadwal = DB::table('jadwal_belajar_mengajar')
            ->select('jadwal_belajar_mengajar.id', 'jadwal_belajar_mengajar.hari', 'jadwal_belajar_mengajar.kelas_id', 'jadwal_belajar_mengajar.guru_mengajar_id', 'mapel.nama_mapel', 'guru.nama_guru', 'guru_mengajar.guru_id', 'jadwal_belajar_mengajar.jam_mulai', 'jadwal_belajar_mengajar.jam_selesai', 'jadwal_belajar_mengajar.ruang_id', 'ruang.nama_ruang', 'jadwal_belajar_mengajar.deleted_at')
            ->join('guru_mengajar', 'jadwal_belajar_mengajar.guru_mengajar_id', '=', 'guru_mengajar.id')
            ->join('mapel', 'guru_mengajar.mapel_id', '=', 'mapel.id')
            ->join('guru', 'guru_mengajar.guru_id', '=', 'guru.id')
            ->join('ruang', 'jadwal_belajar_mengajar.ruang_id', '=', 'ruang.id')
            ->where('jadwal_belajar_mengajar.id', $id)
            ->first();
        $kelas = Kelas::all();
        $ruang = Ruang::all();
        // $guru = Guru::OrderBy('kode_guru', 'asc')->get();
        $guru = DB::table('guru_mengajar')
            ->select(
                'guru_mengajar.id',
                'guru.nama_guru',
                'mapel.nama_mapel',
            )
            ->join('guru', 'guru_mengajar.guru_id', '=', 'guru.id')
            ->join('mapel', 'guru_mengajar.mapel_id', '=', 'mapel.id')
            ->get();
        return view('admin.jadwal.edit', compact('jadwal', 'kelas', 'guru', 'ruang'));
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
        $jadwal = jadwal_belajar_mengajar::findorfail($id);
        $jadwal->delete();

        return redirect()->back()->with('warning', 'Data jadwal berhasil dihapus! (Silahkan cek trash data jadwal)');
    }

    public function trash()
    {
        $jadwal = jadwal_belajar_mengajar::onlyTrashed()->get();
        return view('admin.jadwal.trash', compact('jadwal'));
    }

    public function restore($id)
    {
        $id = Crypt::decrypt($id);
        $jadwal = jadwal_belajar_mengajar::withTrashed()->findorfail($id);
        $jadwal->restore();
        return redirect()->back()->with('info', 'Data jadwal berhasil direstore! (Silahkan cek data jadwal)');
    }

    public function kill($id)
    {
        $jadwal = Jadwal::withTrashed()->findorfail($id);
        $jadwal->forceDelete();
        return redirect()->back()->with('success', 'Data jadwal berhasil dihapus secara permanent');
    }

    public function view(Request $request)
    {
        $jadwal = Jadwal::OrderBy('hari', 'asc')->OrderBy('jam_mulai', 'asc')->where('kelas_id', $request->id)->get();
        foreach ($jadwal as $val) {
            $newForm[] = array(
                'hari' => $val->nama_hari,
                'mapel' => $val->mapel->nama_mapel,
                'kelas' => $val->kelas->nama_kelas,
                'guru' => $val->guru->nama_guru,
                'jam_mulai' => $val->jam_mulai,
                'jam_selesai' => $val->jam_selesai,
                'ruang' => $val->ruang->nama_ruang,
            );
        }
        return response()->json($newForm);
    }
    // jadwal sekarang
    public function jadwalSekarang(Request $request)
    {
        $jadwal = Jadwal::OrderBy('jam_mulai')->OrderBy('jam_selesai')->OrderBy('kelas_id')->where('hari_id', $request->hari)->where('jam_mulai', '<=', $request->jam)->where('jam_selesai', '>=', $request->jam)->get();
        foreach ($jadwal as $val) {
            $newForm[] = array(
                'mapel' => $val->mapel->nama_mapel,
                'kelas' => $val->kelas->nama_kelas,
                'guru' => $val->guru->nama_guru,
                'jam_mulai' => $val->jam_mulai,
                'jam_selesai' => $val->jam_selesai,
                'ruang' => $val->ruang->nama_ruang,
                'ket' => $val->absen($val->guru_id),
            );
        }
        return response()->json($newForm);
    }

    public function cetak_pdf(Request $request)
    {
        $jadwal = Jadwal::OrderBy('hari', 'asc')->OrderBy('jam_mulai', 'asc')->where('kelas_id', $request->id)->get();
        $kelas = Kelas::findorfail($request->id);
        $pdf = PDF::loadView('jadwal-pdf', ['jadwal' => $jadwal]);
        return $pdf->stream();
        // return $pdf->stream('jadwal-pdf.pdf');
    }

    public function guru()
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $jadwal = Jadwal::orderBy('hari')->OrderBy('jam_mulai')->where('guru_id', $guru->id)->get();
        return view('guru.jadwal', compact('jadwal', 'guru'));
    }

    public function siswa()
    {
        $siswa = Siswa::where('no_induk', Auth::user()->no_induk)->first();
        $kelas = Kelas::findorfail($siswa->kelas_id);
        $jadwal = Jadwal::orderBy('hari')->OrderBy('jam_mulai')->where('kelas_id', $kelas->id)->get();
        return view('siswa.jadwal', compact('jadwal', 'kelas', 'siswa'));
    }

    public function export_excel()
    {
        return Excel::download(new JadwalExport, 'jadwal.xlsx');
    }

    public function import_excel(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        $file = $request->file('file');
        $nama_file = rand() . $file->getClientOriginalName();
        $file->move('file_jadwal', $nama_file);
        Excel::import(new JadwalImport, public_path('/file_jadwal/' . $nama_file));
        return redirect()->back()->with('success', 'Data Siswa Berhasil Diimport!');
    }

    public function deleteAll()
    {
        $jadwal = Jadwal::all();
        if ($jadwal->count() >= 1) {
            Jadwal::whereNotNull('id')->delete();
            Jadwal::withTrashed()->whereNotNull('id')->forceDelete();
            return redirect()->back()->with('success', 'Data table jadwal berhasil dihapus!');
        } else {
            return redirect()->back()->with('warning', 'Data table jadwal kosong!');
        }
    }
}
