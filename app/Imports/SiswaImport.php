<?php

namespace App\Imports;

use App\Siswa;
use App\Kelas;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $kelas = Kelas::where('nama_kelas', $row['kelas'])->first();
        if ($row['jenis_kelamin'] == 'L') {
            $foto = 'uploads/siswa/52471919042020_male.jpg';
        } else {
            $foto = 'uploads/siswa/50271431012020_female.jpg';
        }
        return new Siswa([
            'nama_siswa' => $row['nama'],
            'no_induk' => $row['no_induk'],
            'jk' => $row['jenis_kelamin'],
            'nisn' => $row['nisn'],
            'agama' => $row['agama'],
            'tmp_lahir' => $row['tempat_lahir'],
            'tgl_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject ($row['tanggal_lahir']),
            'alamat' => $row['alamat'],
            'email' => $row['email'],
            'foto' => $foto,
            'kelas_id' => $kelas->id,
        ]);
    }
}
