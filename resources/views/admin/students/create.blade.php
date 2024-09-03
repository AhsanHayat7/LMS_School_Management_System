@extends('layouts.app')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Create Students</h6>
                <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value=2 name="role_id" required>
                        <label class="form-check-label" for="flexCheckDefault">
                            Students
                        </label>
                    </div>
                    <br>

                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" placeholder="images" name="images" required>
                        <label for="Images">Images</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Name" name="name" required>
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="integer" class="form-control" placeholder="Roll No" name="roll_no" required>
                        <label for="roll_no">Roll Number</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="address" name="address" required>
                        <label for="address">Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" placeholder="Name@example.com" name="email" required>
                        <label for="floatingInput">Email address</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        <label for="password-confirm">Confirm Password</label>
                    </div>


                    <div class="form-group text-center">
                        <button class="btn btn-success" type="submit">Create New Student</button>
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
