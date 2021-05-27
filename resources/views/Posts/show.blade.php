@extends('layout')

@section('content')

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
        	<h2 class="blog-post-title">{{ $post->title }}</h2>
  			<p class="blog-post-meta">{{ $post->created_at->toDayDateTimeString() }}

 			<p>{{ $post->body }}</p>

       	</div><!-- /.blog-main -->

@endsection