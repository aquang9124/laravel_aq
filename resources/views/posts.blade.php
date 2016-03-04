@extends('layouts.main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="center-align">Create New Post</h2>
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
				</div>
				<div class="panel-body">
					<form action="{{ url('/store') }}" method="post" role="form">
						{!! csrf_field() !!}

						<div class="form-group">
							<label>Post Title:</label>
							<input type="text" class="form-control" name="title">
						</div>

						<div class="form-group">
							<label>Post Description:</label>
							<input type="text" class="form-control" name="description">
						</div>

						<div class="form-group">
							<label>Post Content: </label>
							<textarea id="post-content" name="content"></textarea>
						</div>

						<div class="form-group">
							<div class="text-right">
								<button class="btn btn-success">Add Post</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection