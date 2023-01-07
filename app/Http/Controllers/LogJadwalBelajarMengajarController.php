<?php

namespace App\Http\Controllers;

use App\Models\log_jadwal_belajar_mengajar;
use Illuminate\Http\Request;

class LogJadwalBelajarMengajarController extends Controller
{
    public function index(){

        $data = log_jadwal_belajar_mengajar::all();
        return view ('log_jadwal_belajar_mengajar.index', ['data'=>$data]);
    }
}