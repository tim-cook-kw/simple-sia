@extends("layouts.global")
@section("title") User Student List @endsection 
@section("content")

@if(session('status'))
  <div class="alert alert-success">
    {{session('status')}}
  </div>
@endif 
<div class="row">
    <div class="col-md-12">
    <form action="{{route('student.index')}}">
        <div class="input-group mb-5">
        <input value="{{Request::get('keyword')}}" name="keyword" class="form-control col-md-10" type="text" placeholder="Filter berdasarkan email"/>
            <div class="input-group-append">
                <input type="submit" value="Filter" class="btn btn-primary">
            </div>
        </div>
    </form>
    </div>
</div>
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
            <th><b>Zip</b></th>
            <th><b>Actions</b></th>
          </tr>
        </thead>
        <tbody>
          @foreach($student as $std)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$std->full_name}}</td>
                <td>{{$std->gender}}</td>
                <td>{{$std->place_of_birth}}</td>
                <td>{{$std->birth}}</td>
                <td>{{$std->phone}}</td>
                <td>{{$std->email}}</td>
                <td>{{$std->religion}}</td>
                <td>{{$std->nasionality}}</td>
                <td>{{$std->address}}</td>
                <td>{{$std->country}}</td>
                <td>{{$std->zip}}</td>   
                <td>
                  <a class="btn btn-info text-white btn-sm" href="{{route('student.edit', ['id'=>$std->id])}}">Edit</a>
                  <a href="{{route('student.show', ['id' => $std->id])}}" class="btn btn-primary btn-sm">Detail</a>
                  <form onsubmit="return confirm('Delete this user student permanently?')" class="d-inline" action="{{route('student.destroy', ['id' => $std->id ])}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                  </form>
                </td>
            </tr>
          @endforeach 
        </tbody>
      </table>
      <div class="row">
        <div class="col-12 text-center">
          {{ $student->links() }}
        </div>
      </div>
@endsection 