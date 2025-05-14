<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function loginProcess(Request $request){
        return view('admin.dashboard');
    }
}
