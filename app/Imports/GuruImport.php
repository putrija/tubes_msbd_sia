<?php

namespace App\Imports;
use Auth;
use App\Guru;
use App\Mapel;
use Maatwebsite\Excel\Concerns\ToModel;

use function PHPSTORM_META\map;

class GuruImport implements ToModel
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
        $mapel = mapel::where('nama_mapel',$row[3])->first();
        if ($row[2] == 'L') {
            $foto = 'uploads/guru/35251431012020_male.jpg';
        } else {
            $foto = 'uploads/guru/23171022042020_female.jpg';
        }
        return new Guru([
            'id_card' => $id_card,
            'nama_guru' => $row[0],
            'nip' => $row[1],
            'jk' => $row[2],
            'foto' => $foto,
            'mapel_id' => $mapel->id,
            'tmp_lahir' => $row[4],
            'tgl_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['5']),
            'status_kepegawaian' => $row[6],
            'hp' => $row[7],
            'telp' => $row[8],
            'agama' => $row[9],
            'alamat' => $row[10],
            'rt' => $row[11],
            'rw' => $row[12],
            'nama_dusun' => $row[13],
            'desa_kelurahan' => $row[14],
            'kecamatan' => $row[15],
            'kode_pos' => $row[16],
            'email' => $row[17],
            'nik' => $row[18],
            'no_kk' => $row[19],
        ]);
    }
}
