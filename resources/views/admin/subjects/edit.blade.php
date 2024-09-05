@extends('layouts.app')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Edit Students : {{ $users->name }}</h6>
                <form method="POST" action="{{ route('subjects.update', ['id' => $users->id]) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Subjects" name="subjects" required  value={{$users->subject}}>
                        <label for="class">Subjects</label>
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
