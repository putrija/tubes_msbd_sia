<?php

namespace App\Http\Controllers;
use App\Models\log_wali_kelas;
use Illuminate\Http\Request;

class LogWaliKelasController extends Controller
{
    public function index(){
        
        $data = log_wali_kelas::all();
        return view ('admin.log_wali_kelas.index', ['data'=>$data]);
    }
}