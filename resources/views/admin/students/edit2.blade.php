
@extends('layouts_3.app')
@section('content')
<div class="container-fluid pt-4 px-4">
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Students : {{$users->name}}</h6>
 <form method="POST" action="{{route('dashboard.studentupdate',['id'=>$users->id])}}" enctype="multipart/form-data">
    @csrf
        <div class="form-floating mb-3">
            <input type="file" class="form-control"
                placeholder="images" name="images"  required>
            <label for="photo">Images</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control"
                placeholder="Name" name="name" value={{$users->name}} >
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="integer" class="form-control"
                placeholder="Roll No" name="roll_no" value={{$users->roll_no}} >
            <label for="roll_no">Roll Number</label>
        </div>
        <div class="form-floating mb-3">
            <input type="integer" class="form-control"
                placeholder="Address" name="address" value={{$users->address}} >
            <label for="roll_no">Address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control"
                placeholder="Name@example.com"  name="email"  value={{$users->email}} >
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control"
                placeholder="Password"  name="password"  value={{$users->password}} >
            <label for="Password">Change Password</label>
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
