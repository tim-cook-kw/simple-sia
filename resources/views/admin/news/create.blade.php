@extends("layouts.global")
@section("title") Create New Student @endsection
@section("content")

  <div class="col-md-8">
  <a href="index" class="btn btn-danger">Kembali</a>
  <div class="card mt-5">
    <div class="card-header text-center">
      CREATE NEWS
    </div>
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3"  method="POST" action="/admin/news/create/store">
    {{ csrf_field() }}
        <label for="name">Subject :</label>
            <input class="form-control" placeholder="Subject" type="text" name="subject"/><br>
            @if($errors->has('subject'))
              <div class="text-danger">
                {{ $errors->first('subject')}}
              </div>
            @endif
        <label for="address">Description :</label>
          <textarea name="description" class="form-control"></textarea></br>
          @if($errors->has('subject'))
              <div class="text-danger">
                {{ $errors->first('subject')}}
              </div>
          @endif
        <label for="username">Created By :</label>
            <input class="form-control" placeholder="Created By" type="text" name="created_by"/><br>
            @if($errors->has('created_by'))
              <div class="text-danger">
                {{ $errors->first('created_by')}}
              </div>
            @endif
      <input 
        class="btn btn-primary" 
        type="submit" 
        value="Save"/>
    </form>
  </div>

@endsection