<?php 

// Requires
// $username
// $password
// $phonenumber
include($_SERVER['DOCUMENT_ROOT'] . 'preload.php');

if (!user::exists($_REQUEST['username']))
{
	if($db->insert([
		'table' => 'user',
		'fields' => 'username,password,phonenumber',
		'values' => "'{$_REQUEST['username']}' , '{$_REQUEST['password']}' , '{$_REQUEST['phone']}'"
	])){echo "true";}
		else {
			echo "false";
		};	
} else {
	echo "user already exists";
}


?>