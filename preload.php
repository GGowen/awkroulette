<?php

include( $_SERVER['DOCUMENT_ROOT'] . 'helpers/db.php' );

function __autoload($class_name) {	
	
	$includePath = requireAbs('/classes/' . $class_name . '.php');
	
}

$db = new db();

?>