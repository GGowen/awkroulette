<head>
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<?php include('preload.php'); ?>

<?php echo(__loadResources());?>



<div class="container">
	<div class="header">
		<h1 stlye="tetx">Awk Roullette</h1>
	</div>

	<div class="login">
		
		<div class="row">
			<div class="col-xs-6"><button class="btn btn-lg btn-block" onClick="showRegisterBlock()">Register</button></div>
			<div class="col-xs-6"><button class="btn btn-lg btn-block" onclick="showSignInBlock()">Sign in</button></div>
			
		</div>
		
		
		<div id="sign-in-block">
			<form class="form-signin" role="form" action="api/user/login/index.php" type="get">
				<h2 class="form-signin-heading">Please sign in</h2>
				<input type="text" class="form-control" placeholder="username" required autofocus>
				<input type="password" class="form-control" placeholder="password" required autofocus>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
			</form>
		</div>
		

		<div id="create-account-block">
			<form class="form-create-acc" role="form" action="api/user/new/index.php" type="get">
				<h3 class="form-signin-heading">Create a new account</h2>
				<input type="text" class="form-control" placeholder="username" name="username"  required autofocus>
				<input type="password" class="form-control" placeholder="password" name="password" required autofocus>
				<input type="text" class="form-control" placeholder="07889045404" name="phone"  required autofocus>
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

