<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teachers = Teacher::all();
         return view('admin.teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teachers = Teacher::all();

        return view('admin.teachers.create',compact('teachers'));
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
            'mobile'=> 'required',
        ]);

        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/teachers',$image_new_name);

           $teachers = Teacher::create([
               'name' => $request->name,
               'cnic'=>$request->cnic,
               'email'=>$request->email,
               'images'=> 'uploads/teachers/' . $image_new_name,
               'email'=>$request->email,
               'user_id'=>Auth::id(),
               'mobile'=>$request->mobile

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
        $teachers = Teacher::find($id);
         return view('admin.teachers.edit',compact('teachers'));
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
            'cnic'=> 'required',
            'email' => 'required|email',
            'mobile'=> 'required',
        ]);


        $teachers = Teacher::find($id);
        if($request->hasFile("images"))
        {

            $images = $request->images;

            $images_new_name = time() .  $images->getClientOriginalName();

            $images->move('uploads/teachers/',$images_new_name);

            $teachers->images = 'uploads/teachers/'. $images_new_name;

        }

        $teachers->name = $request->name;
        $teachers->cnic = $request->cnic;
        $teachers->email = $request->email;
        $teachers->mobile = $request->mobile;
        $teachers->save();

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
        $teachers = Teacher::find($id);
        $teachers->delete();

        flash('Teachers Data Deleted Successfully');
        return redirect()->back();
    }
}
