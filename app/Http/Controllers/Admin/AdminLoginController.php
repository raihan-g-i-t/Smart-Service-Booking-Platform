<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function loginProcess(Request $request){
        $user = count(User::all());
        return view('admin.dashboard', ['number' => $user]);
    }
}
