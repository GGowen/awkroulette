<head>
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<?php include('preload.php'); ?>

<?php echo(__loadResources());?>



<div class="container">
	<div class="header">
		<h1>Awk Roullette</h1>
	</div>

	<div class="login">
		
		<div class="row">
			<button class="btn btn-lg btn-block" onClick="showRegisterBlock()">Register</button>
			<button class="btn btn-lg btn-block" onclick="showSignInBlock()">Sign in</button>
		</div>
		
		
		<div id="sign-in-block">
			<form class="form-signin" role="form">
				<h2 class="form-signin-heading">Please sign in</h2>
				<input type="text" class="form-control" placeholder="username" required autofocus>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
			</form>
		</div>
		

		<div id="create-account-block">
			<form class="form-create-acc" role="form">
				<h2 class="form-signin-heading">Create a new account</h2>
				<input type="text" class="form-control" placeholder="username" required autofocus>
				<input type="text" class="form-control" placeholder="07889045404" required autofocus>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Create Account</button>
			</form>
		</div>
		
		
	</div>
</div>

<script>

	$('#create-account-block').hide();
	$('#sign-in-block').hide();

	function showSignInBlock(){
		$('#sign-in-block').show();
		$('#create-account-block').hide();
	}

	function showRegisterBlock(){
		$('#create-account-block').show();
		$('#sign-in-block').hide();
	}

</script>

