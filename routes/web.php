<?php

use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'account'], function () {

    //Guest Middleware
    Route::group(['middleware => guest'], function () {
        Route::get('login', [LoginController::class, 'index'])->name('account.login');
        Route::get('register', [LoginController::class, 'register'])->name('account.register');
        Route::post('process->register', [LoginController::class, 'processRegister'])->name('account.processRegister');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
        Route::get('forget-password', [ForgetPasswordManager::class, "forgetPassword"])
            ->name('account.forget.password');
        Route::post('forget-password', [ForgetPasswordManager::class, "forgetPasswordPost"])
            ->name('account.forget.password.post');
        Route::get('reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])
            ->name('account.reset.password');
        Route::post('reset-password', [ForgetPasswordManager::class, "resetPasswordPost"])
            ->name('account.reset.password.post');
        
    });
    
    //Authenticator Middlewares
    Route::group(['middleware => auth'], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('account.dashboard');
    });
});
// Route::get('forget-password', [ForgetPasswordManager::class, "forgetPassword"])->name('account.forget.password');
// Route::post('forget-password', [ForgetPasswordManager::class, "forgetPasswordPost"])->name('account.forget.password.post');

Route::group(['prefix' => 'admin'], function () {

    //Admin Middleware
    Route::group(['middleware => admin.guest'], function () {
    Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    
    });
    
    //Admin Authenticator Middlewares
    Route::group(['middleware => admin.auth'], function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    
    });
});