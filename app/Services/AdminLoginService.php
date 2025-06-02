<?php

namespace App\Services;

use App\Models\User;

class AdminLoginService
{
    public function getUser(){
        return count(User::where([
            'role' => 0
        ])->get());
    }
}