<?php

namespace App\Models;

use App\Kelas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruMengajar extends Model
{
<<<<<<< Updated upstream
    use HasFactory;
    protected $fillable = ['guru_id', 'mapel_id', 'tahun_ajaran_id'];

=======
    //use HasFactory;
    protected $fiillable = ['guru_id','mapel_id','kelas_id','tahun_ajaran_id'];

    public function guru(){
        return $this->belongsTo(Guru::class);
    }

    public function mapel(){
        return $this->belongsTo('App\Mapel');
    }

    public function kelas(){
        return $this-> belongsTo(Kelas::class);
    }

    public function tahun_ajaran(){
        return $this->belongsTo(Tahun_ajaran::class);
    }
>>>>>>> Stashed changes
    protected $table = 'guru_mengajar';
}
