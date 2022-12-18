<?php

namespace App\Imports;
use App\Guru;
use App\Mapel;
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
        $max = Guru::max('id_card');
        $kode = $max + 1;
        if (strlen($kode) == 1) {
            $id_card = "0000" . $kode;
        } else if (strlen($kode) == 2) {
            $id_card = "000" . $kode;
        } else if (strlen($kode) == 3) {
            $id_card = "00" . $kode;
        } else if (strlen($kode) == 4) {
            $id_card = "0" . $kode;
        } else {
            $id_card = $kode;
        }
        $mapel = Mapel::where('nama_mapel',$row['Mapel'])->first();

        if ($row['Jenis_Kelamin'] == 'L') {
            $foto = 'uploads/guru/35251431012020_male.jpg';
        } else {
            $foto = 'uploads/guru/23171022042020_female.jpg';
        }

        return new Guru([
            'id_card'  => $id_card,
            'nama_guru' => $row['Nama_Guru'],
            'nip' => $row['NIP'],
            'jk' => $row['Jenis_Kelamin'],
            //'mapel_id' => $mapel,
            //'foto' => $foto,
            'mapel_id' => $mapel->id,
            'tmp_lahir' => $row['Tempat_Lahir'],
            'tgl_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject ($row['Tanggal_Lahir']),
            'status_kepegawaian' => $row['Status_Kepegawaian'],
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
            'foto' => $foto
            
        ]);
    }
}