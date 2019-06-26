@extends('layouts.global')
@section('title') Edit Student @endsection 

@section('content')

<div class="col-md-8">
  @if(session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
  @endif 

  <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('student.update', ['id'=>$student->id])}}" method="POST">
    @csrf
    <input type="hidden" value="PUT" name="_method">
        <label for="full_name">Full Name :</label>
            <input value="{{$student->full_name}}" class="form-control" placeholder="Full Name" type="text" name="full_name" id="full_name"/><br>
        <label for="gender">Gender :</label>
            <select name="gender" id="gender" class="form-control">
                @if($student->gender == "female")
                        <option value="male">Male</option>
                        <option value="female" selected="selected">Female</option>
                @else
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                @endif
            </select><br>
        <label for="place_of_birth">Place of Birth :</label>
            <input value="{{$student->place_of_birth}}" class="form-control" placeholder="place_of_birth" type="text" name="place_of_birth" id="place_of_birth"/><br>
        <label for="birth">Date of Birth :</label>
            <input value="{{$student->birth}}" class="form-control" placeholder="01/01/2000" type="date" name="birth" id="birth"/><br>
        <label for="phone">Phone :</label>
            <input value="{{$student->phone}}" class="form-control" placeholder="089898989890" type="number" name="phone" id="phone"/><br>
        <label for="email">Email :</label>
            <input value="{{$student->email}}" class="form-control" placeholder="blabla@gmail.com" type="email" name="email" id="email"/><br>
        <label for="religion">Religion :</label>
            <input value="{{$student->religion}}" class="form-control" placeholder="Islam" type="text" name="religion" id="religion"/><br>
        <label for="nasionality">Nationality :</label>
            <input value="{{$student->nasionality}}" class="form-control" placeholder="Indonesia" type="text" name="nasionality" id="nasionality"/><br>
        <label for="address">Address :</label>
            <input value="{{$student->address}}" class="form-control" placeholder="Jl. Damai" type="text" name="address" id="address"/><br>
        <label for="country">Country :</label>
            <input value="{{$student->country}}" class="form-control" placeholder="Indonesia" type="text" name="country" id="country"/><br>
        <label for="zip">Zip :</label>
            <input value="{{$student->zip}}" class="form-control" placeholder="17111" type="number" name="zip" id="zip"/><br>
        
        <input class="btn btn-primary" type="submit" value="Save"/>
  </form>
</div>
@endsection 