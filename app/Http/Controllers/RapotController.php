<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Kelas;
use App\Mapel;
use App\Nilai;
use App\Rapot;
use App\Sikap;
use App\Siswa;
use App\Jadwal;
use App\Models\Tahun_ajaran;
use App\Models\Semester;
use App\Models\WaliKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class RapotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $jadwal = Jadwal::where('guru_id', $guru->id)->orderBy('kelas_id')->get();
        $kelas = $jadwal->groupBy('kelas_id');

        return view('guru.rapot.kelas', compact('kelas', 'guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::orderBy('nama_kelas')->get();
        $data_siswa = Siswa::all();
        $tahun_ajaran = Tahun_ajaran::all();
        $semester = Semester::all();
        return view('admin.rapot.home', compact('kelas', 'data_siswa', 'tahun_ajaran', 'semester'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $guru = Guru::findorfail($request->guru_id);
        // $cekJadwal = Jadwal::where('guru_id', $guru->id)->where('kelas_id', $request->kelas_id)->count();
        // if ($cekJadwal >= 1) {
        //     Rapot::updateOrCreate(
        //         [
        //             'id' => $request->id
        //         ],
        //         [
        //             'kelas_siswa_id' => $request->siswa_id,
        //             'mapel_id' => $request->kelas_id,
        //             'wali_kelas_id' => $request->guru_id,
        //             'semester_id' => $guru->mapel_id,
        //             'nilai_pengetahuan' => $request->nilai,
        //             'predikat_pengetahuan' => $request->nilai,
        //             'nilai_keterampilan' => $request->nilai,
        //             'predikat_keterampilan' => $request->nilai,
        //         ]
        //     );
        //     return response()->json(['success' => 'Nilai rapot siswa berhasil ditambahkan!']);
        // } else {
        //     return response()->json(['error' => 'Maaf guru ini tidak mengajar kelas ini!']);
        // }
        // https://youtu.be/Sx1RgCjmvfg


            $kelas_id = Siswa::where('nisn', $request->nama_siswa)->value('kelas_id');
            $jurusan = Kelas::where('id', $kelas_id)->value('jurusan_id');
            $wali_kelas_id = WaliKelas::where('kelas_id', $kelas_id)->value('id');

            if($jurusan == 1) {
                $k = 13;
                $row_mapel = [1,2,3,4,5,7,8,9,10,12,13,14,15];
                $row_pengetahuan = [$request->pengetahuan_fisika, $request->pengetahuan_kimia, $request->pengetahuan_biologi, $request->pengetahuan_matematika_wajib, $request->pengetahuan_matematika_peminatan, $request->pengetahuan_kewarganegaraan, $request->pengetahuan_agama, $request->pengetahuan_pendidikan_jasmani, $request->pengetahuan_prakarya, $request->pengetahuan_ekonomi, $request->pengetahuan_bahasa_indonesia, $request->pengetahuan_bahasa_inggris, $request->pengetahuan_sejarah_indonesia];
                $row_keterampilan = [$request->keterampilan_fisika, $request->keterampilan_kimia, $request->keterampilan_biologi, $request->keterampilan_matematika_wajib, $request->keterampilan_matematika_peminatan, $request->keterampilan_kewarganegaraan, $request->keterampilan_agama, $request->keterampilan_pendidikan_jasmani, $request->keterampilan_prakarya, $request->keterampilan_ekonomi, $request->keterampilan_bahasa_indonesia, $request->keterampilan_bahasa_inggris, $request->keterampilan_sejarah_indonesia];
            } else {
                $k = 12;
                $row_pengetahuan = [$request->pengetahuan_agama,$request->pengetahuan_kewarganegaraan,$request->pengetahuan_bahasa_indonesia,$request->pengetahuan_sejarah_indonesia,$request->pengetahuan_prakarya,$request->pengetahuan_pendidikan_jasmani,$request->pengetahuan_matematika_wajib,$request->pengetahuan_geografi,$request->pengetahuan_sosiologi,$request->pengetahuan_sejarah_peminatan,$request->pengetahuan_ekonomi,$request->pengetahuan_bahasa_inggris];
                $row_keterampilan = [$request->keterampilan_agama,$request->keterampilan_kewarganegaraan,$request->keterampilan_bahasa_indonesia,$request->keterampilan_sejarah_indonesia,$request->keterampilan_prakarya,$request->keterampilan_pendidikan_jasmani,$request->keterampilan_matematika_wajib,$request->keterampilan_geografi,$request->keterampilan_sosiologi,$request->keterampilan_sejarah_peminatan,$request->keterampilan_ekonomi,$request->keterampilan_bahasa_inggris];
                $row_mapel = [8,7,13,15,10,9,4,11,6,16,12,14];
            }



            $p = 0;
            // dd($row_pengetahuan);
            // dd($row_pengetahuan[0], $request->pengetahuan_fisika);
            for($o = 0; $o < $k; $o++) {
                if($row_pengetahuan[$o] >= 89 && $row_pengetahuan[$o] <=100 ) {
                    $predikat_pengetahuan = "A";
                } else if($row_pengetahuan[$o] < 89 && $row_pengetahuan[$o] >= 75) {
                    $predikat_pengetahuan = "B";
                } else if($row_pengetahuan[$o] < 75 && $row_pengetahuan[$o] >= 65){
                    $predikat_pengetahuan = "C";
                } else if($row_pengetahuan[$o] < 65 && $row_pengetahuan[$o] >= 0){
                    $predikat_pengetahuan = "D";
                } else {
                    return back()->withInput()->with('warning', 'data nilai tidak valid');
                }

                if($row_keterampilan[$o] >= 89 && $row_keterampilan[$o] <=100 ) {
                    $predikat_keterampilan = "A";
                } else if($row_keterampilan[$o] < 89 && $row_keterampilan[$o] >= 75) {
                    $predikat_keterampilan = "B";
                } else if($row_keterampilan[$o] < 75 && $row_keterampilan[$o] >= 65){
                    $predikat_keterampilan = "C";
                } else if($row_keterampilan[$o] < 65 && $row_keterampilan[$o] >= 0){
                    $predikat_keterampilan = "D";
                } else {
                    return back()->withInput()->with('warning', 'data nilai tidak valid');
                }
            Rapot::updateOrCreate(
                [
                    'id' => $request->id
                ],
                [
                    'kelas_siswa_id' => $kelas_id,
                    'nisn_siswa' => $request->nama_siswa,
                    'tahun_ajaran_id' => $request->tahun_ajaran,
                    'mapel_id' => $row_mapel[$o],
                    'wali_kelas_id' => $wali_kelas_id,
                    'semester_id' => $request->semester,
                    'nilai_pengetahuan' => $row_pengetahuan[$o],
                    'predikat_pengetahuan' => $predikat_pengetahuan,
                    'nilai_keterampilan' => $row_keterampilan[$p],
                    'predikat_keterampilan' => $predikat_keterampilan,
                ]
            );
            $p++;
        }
        $o = 0;
        $p = 0;

            // Rapot::updateOrCreate(
            //     [
            //         'id' => $request->id
            //     ],
            //     [
            //         'kelas_siswa_id' => $request->kelas,
            //         'nisn_siswa' => $request->nama_siswa,
            //         'mapel_id' => '3',
            //         'wali_kelas_id' => '2',
            //         'semester_id' => '1',
            //         'nilai_pengetahuan' => '90',
            //         'predikat_pengetahuan' => 'A',
            //         'nilai_keterampilan' => '90',
            //         'predikat_keterampilan' => 'A',
            //     ]
            // );

        return redirect()->back()->with('success', 'Nilai berhasil ditambahkan');
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
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $kelas = Kelas::findorfail($id);
        $siswa = Siswa::where('kelas_id', $id)->get();
        return view('guru.rapot.rapot', compact('guru', 'kelas', 'siswa'));
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
        $kelas = Kelas::findorfail($id);
        $siswa = Siswa::orderBy('nama_siswa')->where('kelas_id', $id)->get();
        return view('admin.rapot.index', compact('kelas', 'siswa'));
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

    public function rapot($id)
    {
        $id = Crypt::decrypt($id);
        $siswa = Siswa::findorfail($id);
        $kelas = Kelas::findorfail($siswa->kelas_id);
        $jadwal = Jadwal::orderBy('mapel_id')->where('kelas_id', $kelas->id)->get();
        $mapel = $jadwal->groupBy('mapel_id');
        return view('admin.rapot.show', compact('mapel', 'siswa', 'kelas'));
    }

    public function predikat(Request $request)
    {
        $nilai = Nilai::where('guru_id', $request->id)->first();
        if ($request->nilai > 90) {
            $newForm[] = array(
                'predikat' => 'A',
                'deskripsi' => $nilai->deskripsi_a,
            );
        } else if ($request->nilai > 80) {
            $newForm[] = array(
                'predikat' => 'B',
                'deskripsi' => $nilai->deskripsi_b,
            );
        } else if ($request->nilai > 60) {
            $newForm[] = array(
                'predikat' => 'C',
                'deskripsi' => $nilai->deskripsi_c,
            );
        } else {
            $newForm[] = array(
                'predikat' => 'D',
                'deskripsi' => $nilai->deskripsi_d,
            );
        }
        return response()->json($newForm);
    }

    public function siswa()
    {
        $siswa = Siswa::where('no_induk', Auth::user()->no_induk)->first();
        $kelas = Kelas::findorfail($siswa->kelas_id);
        $pai = Mapel::where('nama_mapel', 'Pendidikan Agama dan Budi Pekerti')->first();
        $ppkn = Mapel::where('nama_mapel', 'Pendidikan Pancasila dan Kewarganegaraan')->first();
        if ($pai != null && $ppkn != null) {
            $Spai = Sikap::where('siswa_id', $siswa->id)->where('mapel_id', $pai->id)->first();
            $Sppkn = Sikap::where('siswa_id', $siswa->id)->where('mapel_id', $ppkn->id)->first();
        } else {
            $Spai = "";
            $Sppkn = "";
        }
        $jadwal = Jadwal::where('kelas_id', $kelas->id)->orderBy('mapel_id')->get();
        $mapel = $jadwal->groupBy('mapel_id');
        return view('siswa.rapot', compact('siswa', 'kelas', 'mapel', 'Spai', 'Sppkn'));
    }
}
