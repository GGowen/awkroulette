<?php

include( $_SERVER['DOCUMENT_ROOT'] . 'helpers/db.php' );

function __autoload($class_name) {	
	
	$includePath = requireAbs('/classes/' . $class_name . '.php');
	
}

function __loadResources() {

	echo('<link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css"/>');
	echo('<script src="resources/bootstrap/js/bootstrap.min.js"></script>');
	echo('<script src="resources/jquery/jquery-2.1.1.min.js"></script>');

}

$db = new db();
$session = new session();

?>