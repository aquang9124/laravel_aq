@extends('layouts.main')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="center-align">{{ $post->title }}</h1>
					<p class="center-align"><small>Feel free to edit this post</small></p>
				</div>
				<div class="panel-body">
					<form action="{{ url('/update', [$post->id]) }}" method="post" role="form">
						<input type="hidden" name="_method" value="PUT">
						{!! csrf_field() !!}
						<div id="content">
							{{ $post->content }}
						</div>
						<button class="btn btn-success">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection