<?php

use App\Http\Controllers\Admin\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AdminLoginController::class, 'login'])->name('admin.login');