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
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Section</th>
                    <th scope="col">Editing</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @if($user->role_id == 3)

                        <tr>

                            <td>{{$user->name}}</td>

                            <td>{{$user->class}}</td>


                            <td>{{$user->section}}</td>





                            <td><a href="{{ route('class.edit', ['id' =>$user->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                <span class="glyphicon  glyphicon-pencil"></span>
                            </td>

                            <td><a href="{{ route('class.delete', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                                    <span class="glyphicon  glyphicon-trash"></span>
                        </tr>
                    @endif

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
