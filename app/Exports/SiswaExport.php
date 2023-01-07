<?php

namespace App\Exports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SiswaExport implements FromCollection, WithHeadings, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
   use Exportable;
//    public function __construct(int $angkatan)
//    {
//     $siswa = DB::('siswa')
//     $this->angkatan = $angkatan;
//    }
    public function styles(Worksheet $sheet)
{
    return [
       // Style the first row as bold text.
       1 => ['font' => ['bold' => true]],
    ];
}
    public function headings(): array
    {
        return [
            'Nama','Kelas','NIS','NISN','Agama','Tempat Lahir', 'Tanggal Lahir', 'Alamat','Email','Angkatan','Jenis Kelamin','Foto','Status','Anak Ke',
            'Dari Berapa Saudara','Diterima di Kelas','Diterima pada Tanggal','Diterima Semester','Sekolah Asal','Alamat Sekolah Asal','Tahun Ijazah SMP','Nomor Ijazah SMP','Tahun SKHUN SMP','Nomor SKHUN SMP','Nama Ayah','Nama Ibu',
            'Alamat Ayah','Alamat Ibu','Telpon Ayah','Telepon Ibu','Pekerjaan Ayah','Pekerjaan Ibu','Nama Wali','Pekerjaan Wali','Alamat Wali','Telepon Wali'

        ];
    }
    public function collection()
    {
        $siswa = Siswa::leftjoin('kelas','kelas.id','=','siswa.kelas_id')
        ->leftjoin('status_siswa', 'status_siswa.id', '=', 'siswa.status_id')
        ->rightjoin('detail_siswa','siswa.id','=','detail_siswa.siswa_id')
        ->select('siswa.nama_siswa', 'kelas.nama_kelas', 'siswa.no_induk', 'siswa.nisn', 'siswa.agama', 'siswa.tmp_lahir','siswa.tgl_lahir','siswa.alamat','siswa.email','siswa.angkatan','siswa.jk','siswa.foto', 'status_siswa.ket_status','detail_siswa.anak_ke',              
        'detail_siswa.dari_berapa_bersaudara',
        'detail_siswa.diterima_di_kelas',    
        'detail_siswa.diterima_pada_tanggal',
        'detail_siswa.diterima_semester',    
        'detail_siswa.sekolah_asal',         
        'detail_siswa.alamat_sekolah_asal',  
        'detail_siswa.tahun_ijazah_smp',     
        'detail_siswa.nomor_ijazah_smp',     
        'detail_siswa.tahun_skhun_smp',      
        'detail_siswa.nomor_skhun_smp',      
        'detail_siswa.nama_ayah',            
        'detail_siswa.nama_ibu',             
        'detail_siswa.alamat_ayah',          
        'detail_siswa.alamat_ibu',           
        'detail_siswa.tlp_ayah',             
        'detail_siswa.tlp_ibu',              
        'detail_siswa.pekerjaan_ayah',       
        'detail_siswa.pekerjaan_ibu',        
        'detail_siswa.nama_wali',            
        'detail_siswa.pekerjaan_wali',       
        'detail_siswa.alamat_wali',          
        'detail_siswa.tlp_wali')->get();
        return $siswa;
    }
}
