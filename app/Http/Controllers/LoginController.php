<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Auth;

use Illuminate\Http\Request;

use function PHPSTORM_META\elementType;

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

            if(Auth::user()->role_id == 1){
                 return redirect()->route('dashboard');
        }
            elseif( Auth::user()->role_id == 2 ){
                return redirect()->route('dashboard.students');
        }
            elseif(Auth ::user()->role_id == 3){
                return redirect()->route('dashboard.teachers');
            }


    }else{
        return redirect()->route('dashboard.log')->withError("PLease Register or SignUp the Dashboard.");
    }
}
}
