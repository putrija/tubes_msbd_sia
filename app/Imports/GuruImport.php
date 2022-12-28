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
        $tugas_tambahan = TugasTambahanGuru::where('ket_tugas_tambahan',$row['Tugas Tambahan'])->first();
        $jenis_ptk = JenisPtk::where('ket_jenis_ptk',$row['Jenis PTK'])->first();

        if ($row['Jenis Kelamin'] == 'L') {
            $foto = 'uploads/guru/35251431012020_male.jpg';
        } else {
            $foto = 'uploads/guru/23171022042020_female.jpg';
        }

        return new Guru([
            'id_card_guru' => $row['ID Card'],
            'nama_guru' => $row['Nama'],
            'nip' => $row['NIP'],
            'jk' => $row['Jenis Kelamin'],
            'tmp_lahir' => $row['Tempat Lahir'],
            'tgl_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject ((int)$row['Tanggal Lahir']),
            'status_kepegawaian_id' => $status_kepegawaian->id,
            'tugas_tambahan_id' => $tugas_tambahan->id,
            'jenis_ptk_id' => $jenis_ptk->id,
            'hp'  => $row['No Handphone'],
            'telp' => $row['No Telepon'],
            'agama' => $row['Agama'],
            'alamat' => $row['Alamat'],
            'rt' => $row['RT'],
            'rw'=> $row['RW'],
            'nama_dusun' => $row['Dusun'],
            'desa_kelurahan' => $row['Desa Kelurahan'],
            'kecamatan' => $row['Kecamatan'],
            'kode_pos' => $row['Kode Pos'],
            'email' => $row['Email'],
            'nik' => $row['NIK'],
            'no_kk' => $row['NO KK'],
            'nuptk' => $row['NUPTK'],
            'kode_guru' => $row ['Kode Guru'],
            'foto' => $foto
            
        ]);
    }
}