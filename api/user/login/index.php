<?php 

include($_SERVER['DOCUMENT_ROOT'] . 'preload.php');		
		
if (!isset($_SESSION['user']))
{
	if ($user = user::exists($_REQUEST['username']))
	{	
		if (isset($_REQUEST['password']) && $user->password === $_REQUEST['password'])
		{
			$_SESSION['user'] = $user;		
			echo "User {$_REQUEST['username']} logged in successfully";
		}
		else
		{	
			echo "Incorrect password for user {$_REQUEST['username']}";
		}
	}
	else
	{
		echo 'User not recognised';
	}	
}
else
{
	echo "Already a user logged in {$_SESSION['user']->username}";
}


?>