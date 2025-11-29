<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);

Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'register']);
