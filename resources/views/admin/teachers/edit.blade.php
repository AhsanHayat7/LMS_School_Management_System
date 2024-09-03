@extends('layouts.app')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Edit Teacher : {{ $users->name }}</h6>
                <form method="POST" action="{{ route('teachers.update', ['id' => $users->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" placeholder="images" name="images" required>
                        <label for="images">Images</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Name" name="name"
                            value={{ $users->name }} required>
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="integer" class="form-control" placeholder="31231" name="cnic"
                            value={{ $users->cnic }} required>
                        <label for="cnic">CNIC</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" placeholder="Name@example.com" name="email"
                            value={{ $users->email }} required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="integer" class="form-control" placeholder="2121231" name="mobile_no"
                            value={{ $users->mobile_no }} required>
                        <label for="mobile">Mobile Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password"
                            value={{ $users->password }}>
                        <label for="Password">Change Password</label>
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
