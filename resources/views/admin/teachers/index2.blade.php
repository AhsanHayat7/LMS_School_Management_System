@extends('layouts_2.app')
@section('content')


<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Financial management review</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    Teachers Images
                  </th>
                  <th>
                    First name
                  </th>
                  <th>
                    Taught Class
                  </th>
                  <th>
                    Taught Section
                  </th>
                  <th>

                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)

                <tr>
                  <td class="py-1" href="{{ asset($user->images) }}">
                    <img src="{{asset($user->images)}}"  alt={{$user->name}}/>
                  </td>
                  <td>
                    {{$user->name}}
                  </td>

                  <td>
                    {{$user->class}}
                  </td>
                  <td>
                    {{$user->section}}
                  </td>


                @endforeach
                </tr>
              </tbody>
            </table>
          </div>
        </div>
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
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!-- row end -->
@endsection
