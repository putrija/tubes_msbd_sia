<?php

namespace App\Http\Controllers;

use App\Models\log_guru;
use Illuminate\Http\Request;

class LogGuruController extends Controller
{
    public function index(){

        $data = log_guru::all();
        return view ('admin.log_guru.index', ['data'=>$data]);
    }
}
