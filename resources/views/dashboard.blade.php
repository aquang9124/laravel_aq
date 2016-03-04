@extends('layouts.main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="center-align">Description</h1>
				</div>
				<div class="panel-body">
					<p class="center-align">This is a secret page meant for the admin to be able to log in to in order to add new posts</p>
				</div>
			</div>
		</div>
	</div>
	@if ($user_admin == true)
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="center-align">Post Listing</h1>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Title</th>
								<th>Description</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (isset($posts))
								@foreach ($posts as $post)
									<tr>
										<td>{{ $post->title }}</td>
										<td>{{ $post->description }}</td>
										<td>
											<form class="maintenance" action="/edit/{{ $post->id }}" role="form">
												<button class="btn btn-primary">Edit</button>
											</form>
											<form class="maintenance" action="/delete/{{ $post->id }}" method="post" role="form">
												{{ csrf_field() }}
												<input type="hidden" name="_method" value="DELETE">
												<button class="btn btn-danger">Delete</button>
											</form>
										</td>
									</tr>
								@endforeach
							@endif	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	@endif
</div>
@endsection