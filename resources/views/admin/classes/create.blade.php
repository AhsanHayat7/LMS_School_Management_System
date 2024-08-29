
@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid pt-4 px-4">
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Create Classes</h6>
 <form method="POST" action="{{route('classes.store')}}" enctype="multipart/form-data">
    @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control"
                placeholder="Class" name="class" required>
            <label for="class">Class</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control"
                placeholder="section" name="section" required>
            <label for="section">Section</label>
        </div>
        <br>
        <div class="form-group">
            <label for="students">Select</label>
            <select type ="text" name = "student_id"  id = "students" class="form-select mb-3" aria-label="Select Students">
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
            <br>

            <div class="form-group">
                <label for="teacher">Select</label>
                <select type ="text" name = "teacher_id"  id = "teachers" class="form-select mb-3" aria-label="Select Teachers">
                    @foreach($teachers as $teacher)
                        <option value = "{{$teacher->id}}" >{{$teacher->name}} </option>
                    @endforeach
                </select>
                <br>
        <div class="form-group text-center">
            <button class="btn btn-success" type="submit">Create New Classes</button>
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
    <br>
    <br>
@endsection
