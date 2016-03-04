@extends('layouts.blog')

@section('content')
<div class="outer-container">
	<div class="row-wrapper">
		<div class="col-md-10 col-md-offset-1">
			<h2 class="center-align">{{ $post->title }}</h2>
			<p class="center-align"><small>Posted on: {{ $post->created_at }}</small></p>
			{!! $post->content !!}
		</div>
	</div>
</div>
@endsection