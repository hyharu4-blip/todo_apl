<?php

use App\Http\Controllers\TaskEditController;
use App\Http\Controllers\TaskListController;
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

Route::get('/task/list', [TaskListController::class, 'index'])->name('show_task_list');

Route::get('/task/edit/{task_id}', [TaskEditController::class, 'index'])->name('show_task_edit');

Route::post('/task/edit/{task_id}', [TaskEditController::class, 'edit'])->name('task_edit');