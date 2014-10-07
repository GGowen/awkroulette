<head>
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<?php include('preload.php'); ?>

<?php 
echo(__loadResources());

if($_SESSION['user']){
	echo "<div class='alert alert-success' role='alert'>";
	echo "<div class='container'>";
	echo "<div class='row'>";
	echo "<div class='col-xs-4'>Currently logged in</div>";
	echo "<div class='col-md-offset-6 col-xs-2'><button onclick='logout()' type='button' class='btn btn-default'>Log Out</button></div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
};


?>



<div class="container">
	<div class="header">
		<h1 stlye="tetx">Awks Roullette</h1>
	</div>

	<?php ?>


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

		function logout(){
			window.location.href = "/api/user/logout";
		}

	</script>

