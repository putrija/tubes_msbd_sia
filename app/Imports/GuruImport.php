<?php

namespace App\Imports;
use App\Guru;
use App\Mapel;
use App\Models\JenisPtk;
use App\Models\StatusKepegawaian;
use App\Models\TugasTambahanGuru;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class GuruImport implements ToModel, WithHeadingRow
{
/**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $status_kepegawaian = StatusKepegawaian::where('ket_status_kepeg',$row['Status Kepegawaian'])->first();
        $tugas_tambahan = TugasTambahanGuru::where('ket_tugas_tambahan',$row['Tugas Tambahan'])->first();
        $jenis_ptk = JenisPtk::where('ket_jenis_ptk',$row['Jenis PTK'])->first();

        if ($row['Jenis_Kelamin'] == 'L') {
            $foto = 'uploads/guru/35251431012020_male.jpg';
        } else {
            $foto = 'uploads/guru/23171022042020_female.jpg';
        }

        return new Guru([
            'id_card_guru'  => ['id_card_guru'],
            'nama_guru' => $row['Nama_Guru'],
            'nip' => $row['NIP'],
            'jk' => $row['Jenis_Kelamin'],
            'tmp_lahir' => $row['Tempat_Lahir'],
            'tgl_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject ($row['Tanggal_Lahir']),
            'status_kepegawaian' => $status_kepegawaian->id,
            'tugas_tambahan' => $tugas_tambahan->id,
            'jenis_ptk' => $jenis_ptk->id,
            'hp'  => $row['No_Hp'],
            'telp' => $row['No_Tlp'],
            'agama' => $row['Agama'],
            'alamat' => $row['Alamat'],
            'rt' => $row['RT'],
            'rw'=> $row['RW'],
            'nama_dusun' => $row['Nama_Dusun'],
            'desa_kelurahan' => $row['Desa_Kelurahan'],
            'kecamatan' => $row['Kecamatan'],
            'kode_pos' => $row['Kode_Pos'],
            'email' => $row['Email'],
            'nik' => $row['NIK'],
            'no_kk' => $row['No_KK'],
            'nuptk' => $row['NUPTK'],
            'kode_guru' => $row ['Kode Guru'],
            'foto' => $foto
            
        ]);
    }
}