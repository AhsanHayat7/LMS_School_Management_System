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
        <h6 class="mb-4">Teachers</h6>
        <table class="table table-dark">
            <thead>

                <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">CNIC</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Editing</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)


                <tr>

                    <td>
                        <a data-fancybox="Teacher-images" href="{{ asset($teacher->images) }}">
                            <img src="{{ asset($teacher->images) }}" alt="{{ $teacher->name }}" style="max-width: 100px;">
                        </a>
                    </t>


                    <td>{{$teacher->name}}</td>


                    <td>{{$teacher->cnic}}</td>


                    <td>{{$teacher->email}}</td>

                    <td>{{$teacher->mobile}}</td>




                    <td><a href="{{ route('teachers.edit', ['id' =>$teacher->id]) }}" class="btn btn-xs btn-info">Edit</a>
                        <span class="glyphicon  glyphicon-pencil"></span>
                    </td>

                      <td><a href="{{ route('teachers.delete', ['id' => $teacher->id]) }}" class="btn btn-xs btn-danger">Delete</a>
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
