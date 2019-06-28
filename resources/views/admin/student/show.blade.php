@extends('layouts.global')
@section('title') Detail Student User @endsection 
@section('content')

<div class="col-md-8">
    <div class="card">
      <div class="card-body">
        <b>Full Name :</b> <br>
            {{$student->full_name}}
            <br><br>
        <b>Gender :</b> <br>
            {{$student->gender}}
            <br><br>
        <b>Place of Birth : :</b> <br>
            {{$student->place_of_birth}}
            <br><br>
        <b>Date of Birth :</b> <br>
            {{$student->birth}}
            <br><br>
        <b>Phone :</b> <br>
            {{$student->phone}}
            <br><br>
        <b>Email :</b> <br>
            {{$student->email}}
            <br><br>
        <b>Religion :</b> <br>
            {{$student->religion}}
            <br><br>
        <b>Nationality :</b> <br>
            {{$student->nasionality}}
            <br><br>
        <b>Address :</b> <br>
            {{$student->address}}
            <br><br>
        <b>Country :</b> <br>
            {{$student->country}}
            <br><br>
        <b>Zip :</b> <br>
            {{$student->zip}}
            <br><br>


      </div>
    </div>
  </div>



@endsection