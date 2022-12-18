<?php

namespace App\Exports;

use App\Guru;
use Maatwebsite\Excel\Concerns\FromCollection;

class GuruExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $guru = Guru::join('mapel', 'mapel.id', '=', 'guru.mapel_id')->select('guru.nama_guru', 'guru.nip', 'guru.jk','guru.tgl_lahir', 'mapel.nama_mapel','guru.tmp_lahir', 'guru.status_kepegawaian', 'guru.hp','guru.telp', 'guru.agama', 'guru.alamat', 'guru.rt','guru.rw','guru.nama_dusun','guru.desa_kelurahan','guru.kecamatan','guru.kode_pos','guru.email','guru.nik','guru.no_kk','guru.foto')->get();
        return $guru;
    }
}
