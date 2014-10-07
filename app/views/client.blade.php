@extends('layouts.master')

@section('content')

<section>

	<form class="form-signin" role="form">
	<h2 class="form-signin-heading">Awks Roulette</h2>
		<input type="username" class="form-control" placeholder="username" required autofocus>
		<input type="password" class="form-control" placeholder="Password" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	</form>

</section>

@stop