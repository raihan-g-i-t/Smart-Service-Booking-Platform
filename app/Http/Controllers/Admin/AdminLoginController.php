<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AdminLoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        $user = User::where([
            'email' => $request->email
        ])->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            echo 'Failed';
        }
        auth::guard('admin')->login($user);
        return redirect()->route('admin.dashboard');

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
