@extends('layout')

@section('content')

    <main role="main" class="container">
		<div class="row">
    		<div class="col-md-8 blog-main">

				<h1>Register</h1>

				<hr>

				<form method="POST" action="/register">
				  {{ csrf_field() }}
				  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="text" class="form-control" id="name" name="name" required>
				  </div>
				  <div class="form-group">
				    <label for="email">E-mail:</label>
				    <input type="text" class="form-control" id="email" name="email" required>
				  </div>
				  <div class="form-group">
				    <label for="password">Password:</label>
				    <input type="password" class="form-control" id="password" name="password" required>
				  </div>
				  <div class="form-group">
				    <label for="password_confirmation">Password Confirmation:</label>
				    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
				  </div>
				  <button type="submit" class="btn btn-primary">Register</button>
				  @include('Partials.errors')
				</form>

    		</div>
@endsection