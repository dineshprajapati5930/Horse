<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register_form',[AuthController::class,'index']);
Route::post('register_form', [AuthController::class, 'store']);
Route::get('login', [AuthController::class, 'authenticate']);
// Route::get('login', [AuthController::class, 'login']);
Route::get('dashboard', [AuthController::class, 'Dashboard']);
Route::get('dashboard', [AuthController::class, 'Dashboard']);
