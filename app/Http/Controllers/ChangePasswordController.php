<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function edit()
    {
        return view('admin.changepassword.index');
    }

    public function update(Request $request)
    {
        dd('success');
    }
}
