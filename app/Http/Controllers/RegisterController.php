<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{


    public function reg(){
        $roles  = Role::all();
        return view('auth.register',compact('roles'));
    }


    public function register(Request $request){

        $request->validate([
        'name'=> 'required',
        'email' => 'required|email',
        'password'=> 'required|confirmed',
        'role_id'=> 'required'

        ]);


       $user =   User::create([
           'name'=> $request->name,
           'email'=> $request->email,
           'password'=>Hash::make($request->password),
           'role_id'=> $request->role_id
        ]);

        Auth::loginUsingId($user->id);
        if(Auth::user()->role_id == 1){
            return redirect()->route('dashboard');
   }
       elseif( Auth::user()->role_id == 2 ){
           return redirect()->route('dashboard.students');
   }
       elseif(Auth ::user()->role_id == 3){
           return redirect()->route('dashboard.teachers');
       }

    }
}
