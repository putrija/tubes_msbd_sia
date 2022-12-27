<?php

namespace App\Exports;

use App\Guru;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class GuruExport implements FromCollection, WithHeadings, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
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
            'Nama', 'NIP','Kode Guru', 'Jenis Kelamin', 'Tanggal Lahir','Tempat Lahir','Status Kepegawaian', 'Jenis PTK', 'Tugas_Tambahan','No Handphone', 'No Telepon','Agama','Alamat','RT','RW', 'Dusu', 'Desa Kelurahan','Kecamatan','Kode Pos', 'Email', 'NIK','NO KK', 'Foto', 'SK CPNS',
            'Tanggal CPNS','SK Pengangkatan','TMT Pengangkatan','Lembaga Pengangkatan','Pangkat Golongan','Sumber Gaji','Nama Ibu Kandung','Status Perkawinan','Nama Suami/Istri','Nip Suami/Istri','Pekerjaan Suami/Istri','TMT PNS','Sudah Lisensi Kepsek','Pernah Diklat Pengawasan',
            'Keahlian Braille','Keahlian Bahasa Isyarat','NPWP','Nama Wajib Pajak','Kewarganegaraan','Bank','Nomor Rekening Bank', 'Rekening Atas Nama','Karpeg','Karis Karsu','Lintang','Bujur' 

        ];
    }
    public function collection()
    {
        // $guru = Guru::join('mapel', 'mapel.id', '=', 'guru.mapel_id')->select('guru.nama_guru', 'guru.nip', 'guru.jk','guru.tgl_lahir', 'mapel.nama_mapel','guru.tmp_lahir', 'guru.status_kepegawaian', 'guru.hp','guru.telp', 'guru.agama', 'guru.alamat', 'guru.rt','guru.rw','guru.nama_dusun','guru.desa_kelurahan','guru.kecamatan','guru.kode_pos','guru.email','guru.nik','guru.no_kk','guru.foto')->get();
        $guru = Guru::leftjoin('status_kepegawaian_guru','status_kepegawaian_guru.id', '=', 'guru.status_kepegawaian_id')
                     ->leftjoin('jenis_ptk','jenis_ptk.id','=','guru.jenis_ptk_id')
                     ->leftjoin('tugas_tambahan_guru','tugas_tambahan_guru.id','=','guru.tugas_tambahan_id')
                     ->join('detail_guru','guru.id','=','detail_guru.guru_id')
                     ->select('guru.nama_guru', 'guru.nip', 'guru.kode_guru', 'guru.jk','guru.tgl_lahir','guru.tmp_lahir', 'status_kepegawaian_guru.ket_status_kepeg','jenis_ptk.ket_jenis_ptk','tugas_tambahan_guru.ket_tugas_tambahan', 'guru.hp','guru.telp', 'guru.agama', 'guru.alamat', 'guru.rt','guru.rw','guru.nama_dusun','guru.desa_kelurahan','guru.kecamatan','guru.kode_pos','guru.email','guru.nik','guru.no_kk','guru.foto','detail_guru.sk_cpns',                   
                     'detail_guru.tanggal_cpns',              
                     'detail_guru.sk_pengangkatan',           
                     'detail_guru.tmt_pengangkatan',          
                     'detail_guru.lembaga_pengangkatan',      
                     'detail_guru.pangkat_golongan',          
                     'detail_guru.sumber_gaji',               
                     'detail_guru.nama_ibu_kandung',          
                     'detail_guru.status_perkawinan',         
                     'detail_guru.nama_suami_istri',          
                     'detail_guru.nip_suami_istri',           
                     'detail_guru.pekerjaan_suami_istri',     
                     'detail_guru.tmt_pns',                   
                     'detail_guru.sudah_lisensi_kepsek',      
                     'detail_guru.pernah_diklat_kepengawasan',
                     'detail_guru.keahlian_braille',          
                     'detail_guru.keahlian_bahasa_isyarat',   
                     'detail_guru.npwp',                      
                     'detail_guru.nama_wajib_pajak',          
                     'detail_guru.kewarganegaraan',           
                     'detail_guru.bank',                      
                     'detail_guru.nomor_rekening_bank',       
                     'detail_guru.rekening_atas_nama',        
                     'detail_guru.karpeg',                    
                     'detail_guru.karis_karsu',               
                     'detail_guru.lintang',                   
                     'detail_guru.bujur')->get();
        return $guru;
    }
}
