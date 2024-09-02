<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('dashboard',compact('users'));
    }

    public function logout(){
            \Session::flush();
            \Auth::logout();
            return redirect('');

    }


}
