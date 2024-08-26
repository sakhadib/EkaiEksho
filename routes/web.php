<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\signup_Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [signup_Controller::class, 'index']);
