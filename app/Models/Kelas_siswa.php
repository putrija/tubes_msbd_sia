<?php
//mek by erli untuk pelanggaran
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas_siswa extends Model
{
   // use HasFactory;
//    public function siswa(){
//     return $this->belongsTo('app\Siswa');
//     }

//     public function kelas(){
//         return $this->belongsTo('app\Kelas');
//         }

//     public function tahun_ajaran(){
//     return $this->belongsTo('app\Tahun_ajaran');
//     }

//     public function pelanggaran(){
//         return $this->belongsTo('app\Models\Pelanggaran');
//     }


    protected $table = 'kelas_siswa';
}
