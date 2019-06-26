@extends("layouts.global")
@section("title") Create New Student @endsection
@section("content")

  <div class="col-md-8">
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3"  method="POST">
      @csrf
        <label for="name">First Name :</label>
            <input class="form-control" placeholder="Full Name" type="text" name="name" id="name"/><br>
        <label for="username">Username</label>
            <input class="form-control" placeholder="username" type="text" name="username" id="username"/><br>
                <label for="">Roles</label><br>
                <input type="checkbox" name="roles[]" id="ADMIN" value="ADMIN"> 
                    <label for="ADMIN">Administrator</label>
                <input type="checkbox" name="roles[]" id="TEACHER" value="TEACHER"> 
                    <label for="STAFF">Teacher</label>
                <input type="checkbox" name="roles[]" id="STUDENT" value="STUDENT"> 
                    <label for="CUSTOMER">Student</label>
                    <br><br>
                <label for="phone">Phone number</label> 
      <br>
      <input type="text" name="phone" class="form-control">
      <br>
      <label for="address">Address</label>
      <textarea name="address" id="address" class="form-control"></textarea>
      <br>

      <label for="email">Email</label>
      <input 
        class="form-control" 
        placeholder="user@mail.com" 
        type="text" 
        name="email" 
        id="email"/>
      <br>

      <label for="password">Password</label>
      <input 
        class="form-control" 
        placeholder="password" 
        type="password" 
        name="password" 
        id="password"/>
      <br>

      <label for="password_confirmation">Password Confirmation</label>
      <input 
        class="form-control" 
        placeholder="password confirmation" 
        type="password" 
        name="password_confirmation" 
        id="password_confirmation"/>
      <br>

      <input 
        class="btn btn-primary" 
        type="submit" 
        value="Save"/>
    </form>
  </div>

@endsection