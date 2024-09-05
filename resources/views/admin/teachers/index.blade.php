@extends('layouts.app')
@section('content')

<br>
<br>
<br>
<br>
<br>

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
<div class="col-sm-12 col-xl-8">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Teachers</h6>
        <table class="table table-dark" >
            <thead>

                <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">CNIC</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Taught Class</th>
                    <th scope="col">Taught Section</th>
                    <th scope="col">Select Classes</th>
                    <th scope="col">Editing</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)


                <tr>

                    <td>
                        <a data-fancybox="Teacher-images" href="{{ asset($user->images) }}">
                            <img src="{{ asset($user->images) }}" alt="{{ $user->name }}" style="max-width: 100px;">
                        </a>
                    </t>


                    <td>{{$user->name}}</td>


                    <td>{{$user->cnic}}</td>


                    <td>{{$user->email}}</td>

                    <td>{{$user->mobile_no}}</td>

                    <td>{{$user->class}}</td>

                    <td>{{$user->section}}</td>


                    <td><a href="{{ route('class.edit', ['id' =>$user->id]) }}" class="btn btn-xs btn-info">SelectClass</a>
                        <span class="glyphicon  glyphicon-pencil"></span>
                    </td>

                    <td><a href="{{ route('teachers.edit', ['id' =>$user->id]) }}" class="btn btn-xs btn-info">Edit</a>
                        <span class="glyphicon  glyphicon-pencil"></span>
                    </td>

                      <td><a href="{{ route('teachers.delete', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Delete</a>
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
