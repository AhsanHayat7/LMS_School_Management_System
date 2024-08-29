<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function log(){

        return view('auth.login');

    }

    public function login(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        if(\Auth::attempt($request->only('email','password'))){

            

            return redirect()->route('dashboard');
        }
        return redirect('login')->withError('Login details are not valid');
    }
}
