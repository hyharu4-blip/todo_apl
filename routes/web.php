<?php

use App\Http\Controllers\TaskRegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/task/register', [TaskRegisterController::class, 'index'])->name('show_task_register');

Route::post('/task/register', [TaskRegisterController::class, 'register'])->name('task_register');