<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogGuruController extends Controller
{
    public function index(){
        return view ('admin.log_guru.index');
    }
}
