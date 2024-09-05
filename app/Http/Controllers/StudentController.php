<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function _construct(){
        $this->middleware(['auth','student']);
     }

    public function dashboard(){

        $users =  User::all();
        return view('dashboard3',compact('users'));

    }

     public function index()
    {
        //
            $users = User::students()->get();
         return view('admin.students.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $this->validate($request,[
            'name'=> 'required',
            'roll_no'=>'required',
            'email' => 'required|email',
            'role_id'=> 'required',
            'password'=> 'required|confirmed',
            'images' => 'required'

        ]);
        $images = $request->images;
        $image_new_name = time().$images->getClientOriginalName();

        $images->move('uploads/students',$image_new_name);

        $users = User::create([
            'name' => $request->name,
            'roll_no'=>$request->roll_no,
            'address'=>$request->address,
            'images'=> 'uploads/students/' . $image_new_name,
            'password'=>Hash::make($request->password),
            'email'=>$request->email,
            'role_id'=>$request->role_id,

        ]);

        flash('Student Data Has Been Stored Successfully.');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users = User::find($id);

        return view('admin.students.edit',compact('users'));

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $users = User::find($id);
        if($request->hasFile("images"))
        {

            $images = $request->images;

            $images_new_name = time() .  $images->getClientOriginalName();

            $images->move('uploads/students/',$images_new_name);

            $users->images = 'uploads/students/'. $images_new_name;

        }

        $users->name = $request->name;
        $users->roll_no = $request->roll_no;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->address =  $request->address;

        $users->save();

        flash("Student Data has been Updated Successfully");


        return redirect()->route('students');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $users = User::find($id);
        $users->delete();


        flash('Student Data Deleted Successfully');


        return redirect()->back();


    }
}
