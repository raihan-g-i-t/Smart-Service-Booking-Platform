<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AdminLoginService;
use Illuminate\Auth\Events\Failed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    private $admin;

    public function __construct(AdminLoginService $adminLoginService){
        $this->admin = $adminLoginService;
    }
    public function login(){
        return view('admin.login');
    }

    public function loginProcess(Request $request){
        $data = $request->only('email', 'password');

        if(Auth::guard('admin')->attempt($data)){
            return redirect()->route('admin.dashboard');
        }
        echo 'Failed';

    }

    public function dashboard(){
        $number = $this->admin->getUser();

        return view('admin.dashboard', ['number' => $number]);
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
