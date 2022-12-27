<?php

namespace App\Imports;

use App\Siswa;
use App\Kelas;
use App\Models\StatusSiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');
class SiswaImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        
        // $kelas = Kelas::where('nama_kelas', $row['kelas'])->first();
        $status_siswa = StatusSiswa::where('ket_status', $row['Status'])->first();
        if ($row['Jenis Kelamin'] == 'L') {
            $foto = 'uploads/siswa/52471919042020_male.jpg';
        } else {
            $foto = 'uploads/siswa/50271431012020_female.jpg';
        }
        return new Siswa([
            'nama_siswa' => $row['Nama'],
            'no_induk' => $row['NIS'],
            'jk' => $row['Jenis Kelamin'],
            'nisn' => $row['NISN'],
            'agama' => $row['Agama'],
            'tmp_lahir' => $row['Tempat Lahir'],
            'tgl_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject ((int)$row['Tanggal Lahir']),
            'alamat' => $row['Alamat'],
            'email' => $row['Email'],
            'angkatan' => $row['Angkatan'],
            'status_id' => $status_siswa->id,
            'foto' => $foto,
            // 'kelas_id' => $kelas->id,
        ]);
    }
}
