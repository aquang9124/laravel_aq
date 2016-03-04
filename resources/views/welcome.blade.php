@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- Lists out all of my recent posts -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="center-align">Recent Posts</h2>
                </div>
                <div class="panel-body">
                    @if (isset($posts))
                        <ul class="list-group">
                        @foreach($posts as $post)
                            <li class="list-group-item center-align">
                                <a href="/show/{{ $post->id }}" class="post-link">{{ $post->title }}</a>
                                <p class="post-description">{{ $post->description }}</p>
                                <p><small>This post was created on: {{ $post->created_at }}</small></p>
                            </li>
                        @endforeach
                        </ul>
                    @endif
                </div>
                <div class="panel-footer">
                    <p class="center-align copyright">Copyright &copy; 2016</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
