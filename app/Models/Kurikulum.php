<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Kurikulum extends Model
{
    // use SoftDeletes;
    use HasFactory;
    protected $fillable = ['id', 'nama_kurikulum'];

    protected $table = 'kurikulum';
}
