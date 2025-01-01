<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('user.home');
});

Route::prefix('auth')->name('auth.')->group(function(){
    Route::get('login', [UserController::class, 'getLogin'])->name('getLogin');
    Route::post('login', [UserController::class, 'postLogin'])->name('login');
    Route::get('register', [UserController::class, 'getRegister'])->name('getRegister');
    Route::post('register', [UserController::class, 'register'])->name('register');
//    Route::get('logout', [UserController::class, 'logout'])->name('logout');
//
//    Route::get('forgot-password', [UserController::class, 'getForgotPassword'])->name('getForgotPassword');
//    Route::post('forgot-password', [UserController::class, 'forgotPassword'])->name('forgotPassword');
//    Route::get('change-password', [UserController::class, 'getChangePassword'])->name('getChangePassword');
//    Route::post('change-password', [UserController::class, 'changePassword'])->name('changePassword');
//    Route::get('reset-password', [UserController::class, 'getResetPassword'])->name('getResetPassword');
//    Route::post('reset-password', [UserController::class, 'resetPassword'])->name('resetPassword');
//
//    Route::post('sendEmailVerification', [UserController::class, 'sendEmailVerification'])->name('sendEmailVerification');
});

