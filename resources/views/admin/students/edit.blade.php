
@extends('layouts.app')
@section('content')
<div class="container-fluid pt-4 px-4">
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Students : {{$students->name}}</h6>
 <form method="POST" action="{{route('students.update',['id'=>$students->id])}}" enctype="multipart/form-data">
    @csrf
        <div class="form-floating mb-3">
            <input type="file" class="form-control"
                placeholder="Photo" name="photo"  required>
            <label for="photo">Images</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control"
                placeholder="Name" name="name" value={{$students->name}} required>
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="integer" class="form-control"
                placeholder="Roll No" name="roll_no" value={{$students->roll_no}} required>
            <label for="roll_no">Roll Number</label>
        </div>
        <div class="form-floating mb-3">
            <input type="integer" class="form-control"
                placeholder="Address" name="address" value={{$students->address}} required>
            <label for="roll_no">Address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control"
                placeholder="Name@example.com"  name="email"  value={{$students->email}} required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="integer" class="form-control"
                placeholder="Class" name="class" value={{$students->class}} required>
            <label for="Class">Class</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control"
                placeholder="Section" name="section" value={{$students->section}} required>
            <label for="Section">Section</label>
        </div>
        <div class="form-group text-center">
            <button class="btn btn-success" type="submit">New Student</button>
        </div>
    </form>
    </div>
</div>
</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection
