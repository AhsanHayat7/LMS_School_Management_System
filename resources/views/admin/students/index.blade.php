@extends('layouts.app')
@section('content')

<br>
<br>
<br>
<br>
<br>

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Students</h6>
        <table class="table table-dark">
            <thead>

                <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Class</th>
                    <th scope="col">Section</th>
                    <th scope="col">Editing</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)


                <tr>

                    <td>
                        <a data-fancybox="Students-images" href="{{ asset($student->photo) }}">
                            <img src="{{ asset($student->photo) }}" alt="{{ $student->name }}" style="max-width: 100px;">
                        </a>
                    </t>


                    <td>{{$student->name}}</td>


                    <td>{{$student->roll_no}}</td>


                    <td>{{$student->email}}</td>

                    <td>{{$student->address}}</td>


                    <td>{{$student->class}}</td>


                    <td>{{$student->section}}</td>

                    <td><a href="{{ route('students.edit', ['id' =>$student->id]) }}" class="btn btn-xs btn-info">Edit</a>
                        <span class="glyphicon  glyphicon-pencil"></span>
                    </td>

                     <td><a href="{{ route('students.delete', ['id' => $student->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                            <span class="glyphicon  glyphicon-trash"></span>
                </td>
                </tr>
               @endforeach
            </tbody>
        </table>
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
    <br>
    <br>
    <br>
    <br>
@endsection
