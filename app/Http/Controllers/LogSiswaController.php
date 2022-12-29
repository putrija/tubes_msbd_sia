<?php

namespace App\Http\Controllers;
use App\Models\log_siswa;
use Illuminate\Http\Request;

class LogSiswaController extends Controller
{
    public function index(){
        
        $data = log_siswa::all();
        return view ('admin.log_siswa.index', ['data'=>$data]);
    }
}
