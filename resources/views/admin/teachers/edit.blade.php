
@extends('layouts.app')
@section('content')
<div class="container-fluid pt-4 px-4">
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Teacher : {{$teachers->name}}</h6>
        <h6 class="mb-4">Edit Students : {{$students->name}}</h6>
 <form method="POST" action="{{route('teachers.update',['id'=>$teachers->id])}}" enctype="multipart/form-data">
    @csrf
        <div class="form-floating mb-3">
            <input type="file" class="form-control"
                placeholder="images" name="images"  required>
            <label for="images">Images</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control"
                placeholder="Name" name="name" value={{$teachers->name}} required>
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="integer" class="form-control"
                placeholder="31231" name="cnic"  value={{$teachers->cnic}} required>
            <label for="cnic">CNIC</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control"
                placeholder="Name@example.com"  name="email" value={{$teachers->email}} required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="integer" class="form-control"
                placeholder="2121231" name="mobile" value={{$teachers->mobile}} required>
            <label for="mobile">Mobile Number</label>
        </div>
        <div class="form-group text-center">
            <button class="btn btn-success" type="submit">Create New Teacher</button>
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
    <br>
    <br>
@endsection
