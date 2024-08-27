<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\signup_Controller;
use App\Http\Controllers\login_Controller;
use App\Http\Controllers\contribution_Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [signup_Controller::class, 'index']);
Route::post('/signup', [signup_Controller::class, 'store']);

Route::get('/login', [login_Controller::class, 'index']);
Route::post('/login', [login_Controller::class, 'login']);

Route::get('/contribution', [contribution_Controller::class, 'index']);
