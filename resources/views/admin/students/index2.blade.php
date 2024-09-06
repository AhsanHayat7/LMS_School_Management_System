@extends('layouts_3.app')
@section('content')
<div class="table_section padding_infor_info">
    <div class="table-responsive-sm">
       <table class="table table-dark table-striped">
          <thead>
             <tr>
                    <th>Images</th>
                    <th>Name</th>
                    <th>Roll No</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Editing</th>
             </tr>
          </thead>
          <tbody>
            @foreach ( $users as $user )


             <tr>
                <td>
                    <a data-fancybox="Students-images" href="{{ asset($user->images) }}">
                        <img src="{{ asset($user->images) }}" alt="{{ $user->name }}" style="max-width: 100px;">
                    </a>
                </td>

                <td>{{$user->name}}</td>
                <td>{{$user->roll_no}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>

                {{-- <td><a href="{{ route('class.edit', ['id' =>$user->id]) }}" class="btn btn-xs btn-info">UpdateClass</a>
                    <span class="glyphicon  glyphicon-pencil"></span>
                </td>

                <td><a href="{{ route('subjects.edit', ['id' =>$user->id]) }}" class="btn btn-xs btn-info">UpdateSubjects</a>
                    <span class="glyphicon  glyphicon-pencil"></span>
                </td> --}}


                <td><a href="{{ route('dashboard.edit.s', ['id' =>$user->id]) }}" class="btn btn-xs btn-info">Edit</a>
                    <span class="glyphicon  glyphicon-pencil"></span>
                </td>

             </tr>
             @endforeach
          </tbody>
       </table>
    </div>
 </div>
</div>
</div>
@endsection
