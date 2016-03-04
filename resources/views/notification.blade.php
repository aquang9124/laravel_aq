@extends('layouts.main')

@section('content')
<div class="outer-container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title center-align">
							<a href="#notif1" data-toggle='collapse' class="notif-trigger">Messages</a>
							<span class="badge">{{ $count }}</span>
						</h2>
					</div>
					<div id="notif1" class="panel-collapse collapse">
						<ul class="list-group">
						@if (isset($messages))
							@foreach ($messages as $message)
							<li class="list-group-item center-align">
								<h2>Message From: {{ $message->name }}</h2>
								<p>Email: {{ $message->email }}</p>
								<p class="message-body">'{{ $message->body }}'</p>
								<p><small>Sent On: {{ $message->created_at }}</small></p>
							</li>
							@endforeach
						@endif
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection