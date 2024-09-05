<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard(){
            $users = User::all();
        return view('dashboard2',compact('users'));
    }

     public function index()
    {
        //
        $users = User::where('role_id', 3)->get();
         return view('admin.teachers.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('admin.teachers.create');
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
            'cnic'=> 'required',
            'email' => 'required|email',
            'mobile_no'=> 'required',
            'role_id'=> 'required',
            'password'=> 'required|confirmed'
        ]);

        $images = $request->images;
        $image_new_name = time().$images->getClientOriginalName();

        $images->move('uploads/teachers',$image_new_name);

           $users = User::create([
               'name' => $request->name,
               'cnic'=>$request->cnic,
               'email'=>$request->email,
               'images'=> 'uploads/teachers/' . $image_new_name,
               'email'=>$request->email,
               'password'=>Hash::make($request->password),
               'mobile_no'=>$request->mobile_no,
               'role_id'=>$request->role_id

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
         return view('admin.teachers.edit',compact('users'));
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

            $images->move('uploads/teachers/',$images_new_name);

            $users->images = 'uploads/teachers/'. $images_new_name;

        }

        $users->name = $request->name;
        $users->cnic = $request->cnic;
        $users->email = $request->email;
        $users->mobile_no = $request->mobile_no;
        $users->password = Hash::make($request->password);
        $users->save();

        flash("Teacher Data has been Updated Successfully");


        return redirect()->route('teachers');

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

        flash('Teachers Data Deleted Successfully');
        return redirect()->back();
    }
}
