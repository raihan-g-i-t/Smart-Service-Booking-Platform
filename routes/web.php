<?php

use App\Http\Controllers\Admin\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/', [AdminLoginController::class, 'loginProcess'])->name('login.process');

Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    });

});