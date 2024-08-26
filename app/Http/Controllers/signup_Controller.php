<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signup_Controller extends Controller
{
    public function index()
    {
        return view('authentication.signup');
    }
}
