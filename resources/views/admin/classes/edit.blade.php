@extends('layouts.app')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Edit Students : {{ $users->name }}</h6>
                <form method="POST" action="{{ route('classes.update', ['id' => $users->id]) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="integer" class="form-control" placeholder="Class" name="class" required  value={{$users->class}}>
                        <label for="class">Class</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Section" name="section" required value= {{$users->section}}>
                        <label for="sections">Section</label>
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
