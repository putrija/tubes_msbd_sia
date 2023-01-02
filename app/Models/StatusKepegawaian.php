<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusKepegawaian extends Model
{
    protected $fillable =['ket_status_kepeg'];
    use HasFactory;
    protected $table = 'status_kepegawaian_guru';
}
