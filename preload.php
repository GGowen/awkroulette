<?php

include( $_SERVER['DOCUMENT_ROOT'] . 'helpers/db.php' );

function __autoload($class_name) {	
	
	$includePath = requireAbs('/classes/' . $class_name . '.php');
	
}

function __loadResources() {

	echo '<script src="resources/jquery/jquery-2.1.1.min.js"></script>';
	echo '<link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css"/>';
	echo '<script src="resources/bootstrap/js/bootstrap.min.js"></script>';
	

	echo '<link rel="stylesheet" href="styles/main.css"/>';

}

<<<<<<< Updated upstream
$db = new db();
$session = new session();
=======
//$db = new db();
>>>>>>> Stashed changes

?>