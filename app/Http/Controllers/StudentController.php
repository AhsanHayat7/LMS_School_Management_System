<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard(){

        $users =  User::all();
        return view('dashboard3',compact('users'));

    }

     public function index()
    {
        //
            $students = Student::all();
         return view('admin.students.index',compact('students'));

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
        ]);
        $photo = $request->photo;
     $photo_new_name = time().$photo->getClientOriginalName();

     $photo->move('uploads/students',$photo_new_name);

        $students = Student::create([
            'name' => $request->name,
            'roll_no'=>$request->roll_no,
            'address'=>$request->address,
            'photo'=> 'uploads/students/' . $photo_new_name,
            'email'=>$request->email,
            'user_id'=>Auth::id(),

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
        $students = Student::find($id);

        return view('admin.students.edit',compact('students'));

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
        $this->validate($request,[
            'name'=> 'required',
            'roll_no'=>'required',
            'email' => 'required|email',
            'address'=>'required',
        ]);


        $students = Student::find($id);
        if($request->hasFile("photo"))
        {

            $photo = $request->photo;

            $photo_new_name = time() .  $photo->getClientOriginalName();

            $photo->move('uploads/students/',$photo_new_name);

            $students->photo = 'uploads/students/'. $photo_new_name;

        }

        $students->name = $request->name;
        $students->roll_no = $request->roll_no;
        $students->email = $request->email;

        $students->save();

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

        $students = Student::find($id);
        $students->delete();


        flash('Student Data Deleted Successfully');


        return redirect()->back();


    }
}
