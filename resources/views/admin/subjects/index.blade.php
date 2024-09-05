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
        <h6 class="mb-4">Subjects</h6>
        <table class="table table-dark">
            <thead>

                <tr>
                    <th scope="col">Classes</th>
                    <th scope="col">Subjects</th>
                    <th scope="col">Editing</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @if($user->class && $user->subject)


                        <tr>

                            <td>{{$user->class}}</td>

                            <td>{{$user->subject}}</td>


                            <td><a href="{{ route('subjects.edit', ['id' =>$user->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                <span class="glyphicon  glyphicon-pencil"></span>
                            </td>

                            <td><a href="{{ route('subjects.delete', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Delete</a>
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
