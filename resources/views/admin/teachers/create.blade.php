
@extends('layouts.app')
@section('content')
<div class="container-fluid pt-4 px-4">
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Create Teachers</h6>
 <form method="POST" action="{{route('teachers.store')}}" enctype="multipart/form-data">
    @csrf
        <div class="form-floating mb-3">
            <input type="file" class="form-control"
                placeholder="images" name="image" required>
            <label for="images">Images</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control"
                placeholder="Name" name="name" required>
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="integer" class="form-control"
                placeholder="31231" name="cnic" required>
            <label for="cnic">CNIC</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control"
                placeholder="Name@example.com"  name="email" required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="integer" class="form-control"
                placeholder="2121231" name="mobile" required>
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

@endsection
