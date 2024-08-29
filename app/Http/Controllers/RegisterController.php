<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //


    public function reg(){
        $permissions  = Permission::all();
        return view('auth.register',compact('permissions'));
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


        return redirect()->route('dashboard');
    }
}
