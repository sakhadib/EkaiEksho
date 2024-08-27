<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contributor;

class login_Controller extends Controller
{
    public function index()
    {
        return view('authentication.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $contributor = Contributor::where('username', $request->username)->first();

        if(!$contributor){
            return back()->with('fail', 'We do not recognize your username');
        }
        else{
            if(md5($request->password) == $contributor->password){
                session(['username' => $contributor->username]);
                return redirect('/contribution');                                     //! Change here to dashboard
            }else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
}
