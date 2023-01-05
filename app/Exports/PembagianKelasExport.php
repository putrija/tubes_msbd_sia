<?php

namespace App\Exports;

use App\Models\PembagianKelas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class PembagianKelasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $pembagiankelas = PembagianKelas::leftjoin('siswa','siswa.id','=','kelas_siswa.siswa_id')
                                        ->leftjoin('kelas','kelas.id','=','kelas_siswa.kelas_id')
                                        ->leftjoin('tahun_ajaran','tahun_ajaran.id','=','kelas_siswa.tahun_ajaran_id')
            ->SELECT ('siswa.nama_siswa','kelas.nama_kelas','kelas.ket_kelas','tahun_ajaran.tahun_ajaran')->get();

            
        return $pembagiankelas;
    }
}
