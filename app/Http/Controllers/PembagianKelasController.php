<?php

namespace App\Http\Controllers;

use App\Exports\PembagianKelasExport;
use App\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;
use App\Models\PembagianKelas;
use App\Models\Tahun_ajaran;
use PhpOffice\PhpSpreadsheet\Writer\Pdf;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class PembagianKelasController extends Controller
{
    public function index()
    {
        //$siswa = Siswa::leftjoin('siswa', 'kelas_siswa.siswa_id', '=', 'siswa.id')->get(['siswa.nama_siswa']);
        //$PembagianKelas = DB::table('kelas_siswa')->join('siswa','siswa.id','=','kelas_siswa.id')->join('kelas','kelas.id','=','kelas_siswa.id')->join('tahun_ajaran','tahun_ajaran.id','=','kelas_siswa.id')->get() ;
        $viewPembagianKelas = DB::table('view_pembagian_kelas')->get();
        $PembagianKelas = DB::table('kelas_siswa')->get();
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $tahun_ajaran = Tahun_ajaran::all();
        return view('admin.pembagiankelas.index', compact('viewPembagianKelas', 'PembagianKelas', 'siswa', 'kelas', 'tahun_ajaran'));
    }

    public function store(Request $request)
    {

        PembagianKelas::create([ //panggil model pelanggaran dan panggil fungsi create
            'siswa_id' => $request->siswa_id,
            'kelas_id' => $request->kelas_id,
            'tahun_ajaran_id' => $request->tahun_ajaran_id,
        ]);
        return redirect()->back()->with('success', 'Data pembagian kelas berhasil disimpan!');
    }
    // public function showPembagianKelas(){
    //     $pembagiankelas = PembagianKelas::all();
    //     return view('admin.pembagiankelas.index', compact('pembagian_kelas'));
    //   }
    public function export_excel()
    {
        return Excel::download(new PembagianKelasExport, 'pembagiankelas.xlsx');
    }


    public function destroy($id)
    {
        $mapel = DB::table('mapel')
            // ->select('mapel.id', 'mapel.nama_mapel', 'mapel.kurikulum_id', 'kurikulum.nama_kurikulum')
            ->join('guru_mengajar', 'mapel.id', '=', 'guru_mengajar.mapel_id')
            ->join('jadwal_belajar_mengajar', 'guru_mengajar.id', '=', 'jadwal_belajar_mengajar.guru_mengajar_id')
            ->where('mapel.id', $id);

        $mapel->delete();

        $mapel2 = DB::table('mapel')
            ->where('mapel.id', $id);
        $mapel2->delete();

        return redirect()->back()->with('warning', 'Data mapel berhasil dihapus! (Silahkan cek trash data mapel)');
    }
}
