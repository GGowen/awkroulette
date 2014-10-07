<?php 

include($_SERVER['DOCUMENT_ROOT'] . 'preload.php');

$db->insert([
	'table' => 'user',
	'fields' => 'username,password,phonenumber',
	'values' => "'{$_REQUEST['username']}' , '{$_REQUEST['password']}' , '{$_REQUEST['phone']}'"
]);

?>