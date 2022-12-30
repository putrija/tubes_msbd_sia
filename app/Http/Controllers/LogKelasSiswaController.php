<?php

namespace App\Http\Controllers;

use App\Models\log_kelas_siswa;
use Illuminate\Http\Request;

class LogKelasSiswaController extends Controller
{
    public function index(){

        $data = log_kelas_siswa::all();
        return view ('admin.log_kelas_siswa.index', ['data'=>$data]);
    }
}