<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('dashboard');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::view('/welcome', 'welcome')->name('w');

Route::middleware('auth')->group(function() {
    Route::get('/settings', [LoginController::class, 'settings'])->name('settings');
    Route::post('/settings', [LoginController::class, 'updateUser'])->name('updateSettings');

    Route::resource('/student', StudentController::class)->middleware('auth_role');
    Route::resource('/teacher', TeacherController::class)->middleware('auth_role');
    Route::resource('/user', UserController::class)->middleware('auth_role');
    // Route::get('/reset', [UserController::class, 'resetPassword'])->name('resetPassword');
});

