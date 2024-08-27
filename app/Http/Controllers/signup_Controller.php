<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contributor;

class signup_Controller extends Controller
{
    public function index()
    {
        return view('authentication.signup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:contributors,username',
            'email' => 'required|email|unique:contributors,email',
            'FullName' => 'required',
            'password' => 'required|min:6',
            'conform_password' => 'required|same:password'
        ]);

        if($request->password != $request->conform_password){
            return back()->with('fail', 'Password does not match');
        }

        $contributor = new Contributor;

        $contributor->username = $request->username;
        $contributor->email = $request->email;
        $contributor->name = $request->FullName;
        $contributor->password = md5($request->password);

        $contributor->save();

             
        return redirect('/login')->with('success', 'You have successfully registered');
    }
}
