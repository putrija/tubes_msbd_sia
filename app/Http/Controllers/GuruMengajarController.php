<?php

namespace App\Http\Controllers;

use App\Models\GuruMengajar;
use App\Models\Guru;
use App\Mapel;
use App\Models\Tahun_ajaran;
use Illuminate\Http\Request;
use SteamCondenser\Exceptions\SocketException;

use function GuzzleHttp\Promise\all;

class GuruMengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru_mapel = GuruMengajar::all();
        $guru = Guru::all();
        $mapel = Mapel::all();
        $tahun_ajaran = Tahun_ajaran::all();
        return view('admin.guru_mapel.index', compact('guru_mapel','guru','mapel','tahun_ajaran'));//masukkan alamat dari filenya lengkap, biar ketemu hiks
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
        try{
        GuruMengajar::Create(
            [
            'guru_id' => $request->guru_id,
            'mapel_id'=>$request->mapel_id,
            'tahun_ajaran_id'=>$request->tahun_ajaran_id
        ]);
            // dd($request->all());
         
        return redirect()->back()->with('success', 'Data guru mapel berhasil disimpan!');
        }

        catch (\Exception $e) {

            return redirect()->back()->with('warning', 'data tidak dapat ditambah karena sudah tersedia');
            
        }

        //percobaan
       // try{
            // $this->validate($request, [
            //     'guru_id' => 'required',
            //     'mapel_id' => 'required',
            //     'tahun_ajaran_id' => 'required',
            // ]);
    
            // GuruMengajar::updateOrCreate(
            //     [
            //         'id' => $request->id
            //     ],
            //     [
            //         'guru_id' => $request->guru_id,
            //     ],
            //     [
            //         'mapel_id' => $request->mapel_id,
            //     ],
            //     [
            //         'tahun_ajaran_id' => $request->tahun_ajaran_id,
            //     ]
            // );
            
            // return dd($request->all());
            //return redirect()->back()->with('success', 'Data guru mapel berhasil diperbarui!');
            //}
    
            // catch (\Exception $e) {
    
            //     return redirect()->back()->with('warning', 'data tidak dapat ditambah karena sudah tersedia');
                
            // }
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
    {   //fungsi edit itu untuk menampilkan form dann meletakkan data yang lama didalam formnya
        //buat variabel baru guru terpilih lalu buat isi variabelnya itu dari tabel guru dimana idnya = id yg didapat (id request)
        //demikian untuk mapel dan guru
        //itu diletak dicontroller lalu compact dan variabel baru tadi yg dipanggil.
        //untuk value pake, select search pake selsct mapel. tapi untuk nampilin namanya pake table yang ada
        $guru_mapel = GuruMengajar::findorfail($id);
        $guru = Guru::all();
        $mapel = Mapel::all();
        $tahun_ajaran = Tahun_ajaran::all();

        // dd($guru);
        return view('admin.guru_mapel.edit-guru-mapel',compact('guru_mapel','guru','mapel','tahun_ajaran'));
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
        // $guru_mapel = GuruMengajar::all();

        //     'guru_id' => $request->guru_id;
        //     'mapel_id'=> $request->mapel_id;
        //     'tahun_ajaran_id'=> $request->tahun_ajaran_id;
        //     save();

        // GuruMengajar::create([//panggil model pelanggaran dan panggil fungsi create
        //     'guru_id' => $request->guru_id,
        //     'mapel_id'=>$request->mapel_id,
        //     'tahun_ajaran_id'=>$request->tahun_ajaran_id
        // ]);

            $guru_mapel = GuruMengajar::find($id);
            $guru_mapel->guru_id = $request->guru_id;
            $guru_mapel->mapel_id = $request->mapel_id;
            $guru_mapel->tahun_ajaran_id = $request->tahun_ajaran_id;
            $guru_mapel->save();
            

            // if($simpan){
            //     Alert::success(' Berhasil Tambah data ', ' Silahkan dicek kembali');
            // }else{
            //     Alert::error('data gagal disimpan ', ' Silahkan coba lagi');
            // }
            // return redirect()->back();
        

            // dd($request->all());
         
        return redirect('guru_mapel')->with('success', 'Data guru mapel berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru_mapel = GuruMengajar::findorfail($id);
        $guru_mapel->delete();
        return redirect()->back()->with('warning', 'Data guru mapel berhasil dihapus!');
        //info itu adalah style dari boostrapnya untuk warna dari apa ya lupa aku namanya yg jendela melayan gitu lah
    }
}
