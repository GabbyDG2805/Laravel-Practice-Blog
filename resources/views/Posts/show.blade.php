@extends('layout')

@section('content')

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
        	<h2 class="blog-post-title">{{ $post->title }}</h2>
  			<p class="blog-post-meta">{{ $post->created_at->toDayDateTimeString() }}

 			<p>{{ $post->body }}</p>

      <hr>
      <div class="comments">
        <ul class="list-group">
          @foreach ($post->comments as $comment)
            <li class="list-group-item">
              <strong> {{ $comment->created_at->diffForHumans() }}:<br></strong>
              {{ $comment->body }}
            </li>
          @endforeach
        </ul>
      </div>

      <div class="card">
        <div class="card-block">
          <form method="POST" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}
            <div class="form-group">
              <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Post Comment</button>
            </div>
          </form>
          @include('Partials.errors')
        </div>
      </div>

  </div><!-- /.blog-main -->

@endsection
