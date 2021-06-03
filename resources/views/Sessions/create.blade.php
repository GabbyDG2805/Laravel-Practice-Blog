@extends('layout')

@section('content')

    <main role="main" class="container">
		<div class="row">
    		<div class="col-md-8 blog-main">

				<h1>Sign In</h1>

				<hr>

				<form method="POST" action="/login">
				  {{ csrf_field() }}
				  <div class="form-group">
				    <label for="email">E-mail:</label>
				    <input type="text" class="form-control" id="email" name="email" required>
				  </div>
				  <div class="form-group">
				    <label for="password">Password:</label>
				    <input type="password" class="form-control" id="password" name="password" required>
				  </div>
				  <button type="submit" class="btn btn-primary">Sign In</button>
				  @include('Partials.errors')
				</form>

    		</div>
@endsection