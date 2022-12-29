<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogRaporController extends Controller
{
    public function index(){

        return view ('admin.log_rapor.index');
    }
}
