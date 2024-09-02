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
        <h6 class="mb-4">Classes</h6>
        <table class="table table-dark">
            <thead>

                <tr>
                    <th scope="col">Class</th>
                    <th scope="col">Section</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Taught By</th>
                    <th scope="col">Editing</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classes as $class)
                    {{-- @foreach ($classes->students as $student)
                        @foreach ($classes->teachers as $teacher) --}}



                        <tr>


                            <td>{{$class->class}}</td>


                            <td>{{$class->section}}</td>


                            <td>{{$class->students->name}}</td>

                            <td>{{$class->teachers->name}}</td>


        {{--
                            <td><a href="{{ route('students.edit', ['id' =>$student->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                <span class="glyphicon  glyphicon-pencil"></span>
                            </td>

                            <td><a href="{{ route('students.delete', ['id' => $student->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                                    <span class="glyphicon  glyphicon-trash"></span> --}}
                        {{-- </td> --}}
                        </tr>
                        {{-- @endforeach
                    @endforeach --}}

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
