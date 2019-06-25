@extends("layouts.global")
@section("title") Student list @endsection 
@section("content")

<table class="table table-bordered">
        <thead>
          <tr>
            <th><b>No.</b></th>            
            <th><b>Full Name</b></th>
            <th><b>Gender</b></th>
            <th><b>Place of Birth</b></th>
            <th><b>Date of Birth</b></th>
            <th><b>Phone</b></th>
            <th><b>Email</b></th>
            <th><b>Religion</b></th>
            <th><b>Nationality</b></th>
            <th><b>Address</b></th>
            <th><b>Country</b></th>
            <th><b>State</b></th>
            <th><b>Zip</b></th>
          </tr>
        </thead>
        <tbody>
          @foreach($student as $std)
            <tr>
                <td>{{}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>
                </td>
                <td>
                [TODO: actions]
                </td>
            </tr>
          @endforeach 
        </tbody>
      </table>


@endsection 