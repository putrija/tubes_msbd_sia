<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Guru;
use App\Mapel;
use App\Jadwal;
use App\Models\detail_guru;
use App\Kehadiran;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Exports\GuruExport;
use App\Imports\GuruImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\DetailGuru;
use App\Models\JenisPtk;
use App\Models\StatusKepegawaian;
use App\Models\TugasTambahanGuru;
use App\Nilai;
use Egulias\EmailValidator\Result\Reason\DetailedReason;
use Illuminate\Support\Facades\DB;


class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $guru,$detail_guru;
    public function __construct()
    {
        $this->guru = new Guru();
        $this->detail_guru = new DetailGuru();
    }
    public function index()
    {
        // $detail_guru = DetailGuru::orderBy('guru_id')->get();
        $status_kepegawaian = StatusKepegawaian::orderBy('ket_status_kepeg')->get();
        $tugas_tambahan = TugasTambahanGuru::orderBy('ket_tugas_tambahan')->get();
        $jenis_ptk = JenisPtk::orderBy('ket_jenis_ptk')->get();
        $guru = Guru::all();
        $detail_guru = DetailGuru::all();
        return view('admin.guru.index', compact('guru', 'jenis_ptk', 'status_kepegawaian', 'tugas_tambahan','detail_guru'));
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
            'id_card_guru' => 'required|unique:guru|min:5|max:5',
            'nama_guru' => 'required',
            'kode_guru' => 'required|string|unique:guru|min:3|max:5',
            'jk' => 'required'
        ]);

        if ($request->foto) {
            $foto = $request->foto;
            $new_foto = date('siHdmY') . "_" . $foto->getClientOriginalName();
            $foto->move('uploads/guru/', $new_foto);
            $nameFoto = 'uploads/guru/' . $new_foto;
        } else {
            if ($request->jk == 'L') {
                $nameFoto = 'uploads/guru/35251431012020_male.jpg';
            } else {
                $nameFoto = 'uploads/guru/23171022042020_female.jpg';
            }
        }

        $guru = Guru::create([
            'id_card_guru' => $request->id_card_guru,
            'nip' => $request->nip,
            'status_kepegawaian_id' => $request->status_kepegawaian_id,
            'jenis_ptk_id' => $request->jenis_ptk_id,
            'tugas_tambahan_id' => $request->tugas_tambahan_id,
            'nama_guru' => $request->nama_guru,
            'kode_guru' => $request->kode_guru,
            'jk' => $request->jk,
            'telp' => $request->telp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'hp' => $request->hp,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'nama_dusun' => $request->nama_dusun,
            'desa_kelurahan' => $request->desa_kelurahan,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
            'email' => $request->email,
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'nuptk' => $request->nuptk,
            'foto' => $nameFoto,
        ]);
        $data = $request->all();
        $detail_guru = new DetailGuru;
        $detail_guru->guru_id = $guru->id;
        $detail_guru->sk_cpns = $data['sk_cpns'];
        $detail_guru->tanggal_cpns = $data['tanggal_cpns'];
        $detail_guru->sk_pengangkatan = $data['sk_pengangkatan'];
        $detail_guru->tmt_pengangkatan = $data['tmt_pengangkatan'];
        $detail_guru->lembaga_pengangkatan = $data['lembaga_pengangkatan'];
        $detail_guru->pangkat_golongan = $data['pangkat_golongan'];
        $detail_guru->nama_ibu_kandung = $data['nama_ibu_kandung'];
        $detail_guru->status_perkawinan = $data['status_perkawinan'];
        $detail_guru->nama_suami_istri = $data['nama_suami_istri'];
        $detail_guru->nip_suami_istri = $data['nip_suami_istri'];
        $detail_guru->pekerjaan_suami_istri = $data['pekerjaan_suami_istri'];
        $detail_guru->tmt_pns = $data['tmt_pns'];
        $detail_guru->sudah_lisensi_kepsek = $data['sudah_lisensi_kepsek'];
        $detail_guru->pernah_diklat_kepengawasan = $data['pernah_diklat_kepengawasan'];
        $detail_guru->keahlian_braille = $data['keahlian_braille'];
        $detail_guru->keahlian_bahasa_isyarat = $data['keahlian_bahasa_isyarat'];
        $detail_guru->npwp = $data['npwp'];
        $detail_guru->nama_wajib_pajak = $data['nama_wajib_pajak'];
        $detail_guru->kewarganegaraan = $data['kewarganegaraan'];
        $detail_guru->bank = $data['bank'];
        $detail_guru->nomor_rekening_bank = $data['nomor_rekening_bank'];
        $detail_guru->rekening_atas_nama = $data['rekening_atas_nama'];
        $detail_guru->karpeg = $data['karpeg'];
        $detail_guru->karis_karsu = $data['karis_karsu'];
        $detail_guru->lintang = $data['lintang'];
        $detail_guru->bujur = $data['bujur'];

        $detail_guru->save();
        
        // $guru_id = $request->id;
        // $detail_guru['guru_id'] = $guru_id;
        // $this->detail_guru->sk_cpns = Input::get('sk_cpns');
        return redirect()->back()->with('success', 'Berhasil menambahkan data guru baru!');
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
        $guru = Guru::findOrFail($id);
        $detail_guru = DetailGuru::orderBy('guru_id')->first();
        $status_kepegawaian = StatusKepegawaian::orderBy('ket_status_kepeg')->first();
        $tugas_tambahan = TugasTambahanGuru::orderBy('ket_tugas_tambahan')->first();
        $jenis_ptk = JenisPtk::orderBy('ket_jenis_ptk')->first();
        return view('admin.guru.details', compact('guru','status_kepegawaian','tugas_tambahan','jenis_ptk','detail_guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $status_kepegawaian = StatusKepegawaian::all();
        $tugas_tambahan = TugasTambahanGuru::all();
        $jenis_ptk = JenisPtk::all();
        $detail_guru = DetailGuru::orderBy('guru_id')->get();
        // $detail_guru = DetailGuru::orderBy('guru_id')->first();
        // $detail_guru_get = DetailGuru::orderBy('guru_id')->get();
        $id = Crypt::decrypt($id);
        $guru = Guru::findorfail($id);
        return view('admin.guru.edit', compact('guru','status_kepegawaian','tugas_tambahan','jenis_ptk','detail_guru'));
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
        // $status_kepegawaian = StatusKepegawaian::orderBy('ket_status_kepeg')->first();
        // $status_kepegawaian_get = StatusKepegawaian::orderBy('ket_status_kepeg')->get();
        // $tugas_tambahan = TugasTambahanGuru::orderBy('ket_tugas_tambahan')->first();
        // $jenis_ptk = JenisPtk::orderBy('ket_jenis_ptk')->first();
        // $tugas_tambahan_get = TugasTambahanGuru::orderBy('ket_tugas_tambahan')->get();
        // $jenis_ptk_get = JenisPtk::orderBy('ket_jenis_ptk')->get();
        // $detail_guru = DetailGuru::orderBy('guru_id')->first();
        // $detail_guru_get = DetailGuru::orderBy('guru_id')->get();
        $this->validate($request, [
            'nama_guru' => 'required',
            'jk' => 'required',
        ]);

        $guru = Guru::findorfail($id);
        $user = User::where('id_card_guru', $guru->id_card_guru)->first();
        if ($user) {
            $user_data = [
                'name' => $request->nama_guru
            ];
            $user->update($user_data);
        } else {
        }
        $guru_data = [
            'nip' => $request->nip,
            'status_kepegawaian_id' => $request->status_kepegawaian_id,
            'jenis_ptk_id' => $request->jenis_ptk_id,
            'tugas_tambahan_id' => $request->tugas_tambahan_id,
            'nama_guru' => $request->nama_guru,
            'jk' => $request->jk,
            'telp' => $request->telp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'hp' => $request->hp,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'nama_dusun' => $request->nama_dusun,
            'desa_kelurahan' => $request->desa_kelurahan,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
            'email' => $request->email,
            'nik' => $request->nik,
            'no_kk' => $request->no_kk,
            'nuptk' => $request->nuptk,
        ];
        $guru->update($guru_data);

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::findorfail($id);
        $countJadwal = Jadwal::where('guru_id', $guru->id)->count();
        if ($countJadwal >= 1) {
            $jadwal = Jadwal::where('guru_id', $guru->id)->delete();
        } else {
        }
        $countUser = User::where('id_card_guru', $guru->id_card_guru)->count();
        if ($countUser >= 1) {
            $user = User::where('id_card_guru', $guru->id_card_guru)->delete();
        } else {
        }
        $guru->delete();
        return redirect()->route('guru.index')->with('warning', 'Data guru berhasil dihapus! (Silahkan cek trash data guru)');
    }

    public function trash()
    {
        $guru = Guru::onlyTrashed()->get();
        return view('admin.guru.trash', compact('guru'));
    }

    public function restore($id)
    {
        $id = Crypt::decrypt($id);
        $guru = Guru::withTrashed()->findorfail($id);
        $detail_guru = DetailGuru::all();
        $countJadwal = Jadwal::withTrashed()->where('guru_id', $guru->id)->count();
        if ($countJadwal >= 1) {
            $jadwal = Jadwal::withTrashed()->where('guru_id', $guru->id)->restore();
        } else {
        }
        $countUser = User::withTrashed()->where('id_card_guru', $guru->id_card_guru)->count();
        if ($countUser >= 1) {
            $user = User::withTrashed()->where('id_card_guru', $guru->id_card_guru)->restore();
        } else {
        }
       
        $guru->restore();
        return redirect()->back()->with('info', 'Data guru berhasil direstore! (Silahkan cek data guru)');
    }

    public function kill($id)
    {
        $guru = Guru::withTrashed()->findorfail($id);
        $countJadwal = Jadwal::withTrashed()->where('guru_id', $guru->id)->count();
        if ($countJadwal >= 1) {
            $jadwal = Jadwal::withTrashed()->where('guru_id', $guru->id)->forceDelete();
        } else {
        }
        $countUser = User::withTrashed()->where('id_card_guru', $guru->id_card_guru)->count();
        if ($countUser >= 1) {
            $user = User::withTrashed()->where('id_card_guru', $guru->id_card_guru)->forceDelete();
        } else {
        }
        $guru->forceDelete();
        return redirect()->back()->with('success', 'Data guru berhasil dihapus secara permanent');
    }

    public function ubah_foto($id)
    {
        $id = Crypt::decrypt($id);
        $guru = Guru::findorfail($id);
        return view('admin.guru.ubah-foto', compact('guru'));
    }

    public function update_foto(Request $request, $id)
    {
        $this->validate($request, [
            'foto' => 'required'
        ]);

        $guru = Guru::findorfail($id);
        $foto = $request->foto;
        $new_foto = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . "_" . $foto->getClientOriginalName();
        $guru_data = [
            'foto' => 'uploads/guru/' . $new_foto,
        ];
        $foto->move('uploads/guru/', $new_foto);
        $guru->update($guru_data);

        return redirect()->route('guru.index')->with('success', 'Berhasil merubah foto!');
    }

    public function mapel($id)
    {
        $id = Crypt::decrypt($id);
        $mapel = Mapel::findorfail($id);
        $guru = Guru::where('mapel_id', $id)->orderBy('kode', 'asc')->get();
        return view('admin.guru.show', compact('mapel', 'guru'));
    }

    public function export_excel()
    {
        return Excel::download(new GuruExport, 'guru.xlsx');
    }

    public function import_excel(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        $file = $request->file('file');
        $nama_file = rand() . $file->getClientOriginalName();
        $file->move('file_guru', $nama_file);
        Excel::import(new GuruImport, public_path('/file_guru/' . $nama_file));
        return redirect()->back()->with('success', 'Data Guru Berhasil Diimport!');
    }

    public function deleteAll()
    {
        $guru = Guru::all();
        if ($guru->count() >= 1) {
            Guru::whereNotNull('id')->delete();
            Guru::withTrashed()->whereNotNull('id')->forceDelete();
            return redirect()->back()->with('success', 'Data table guru berhasil dihapus!');
        } else {
            return redirect()->back()->with('warning', 'Data table guru kosong!');
        }
    }
}
