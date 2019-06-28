@extends("layouts.global")
@section("title") Create New Student @endsection
@section("content")
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    ALL ANNOUNCEMENT
                </div>
                <div class="card-body">
                    <a href="/admin/news/create" class="btn btn-primary">Create News</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered" class="display responsive nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th><i class="fa fa-user-info"></i>SUBJECT</th>
								<th><i class="fa fa-info-circle"></i>DESCRIPTION</th>
								<th><i class="fa fa-user"></i>CREATED BY</th>
								<th><i class="fa fa-sliders"></i>ACTION</th>
							</tr>
						</thead>
						<tbody>
						@foreach($news as $n)
							<tr>
								<td>{{ $n->subject }}</td>
								<td>{{ $n->description }}</td>
								<td>{{ $n->created_by }}</td>
								<td class="action-link">
									<a class="delete" href="/admin/news/index/delete/{{ $n->id }}" title="Delete"><button type="button" class="btn btn-danger">Delete</button></a>
                                    <!-- <a class="edit" href="/admin/news/edit{{ $n->id }}" title="Delete"><button type="button" class="btn btn-primary">Edit</button></a> -->
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
                </div>
            </div>
        </div>
@endsection