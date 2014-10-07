<?php

include( $_SERVER['DOCUMENT_ROOT'] . 'helpers/db.php' );

function default_autoload($class_name) {	
	
	if (!preg_match('/Twilio/',$class_name))
	{		
		$includePath = requireAbs('/classes/' . $class_name . '.php');
	}	
	
}

spl_autoload_register('default_autoload');

function __loadResources() {

	echo '<script src="resources/jquery/jquery-2.1.1.min.js"></script>';
	echo '<link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css"/>';
	echo '<script src="resources/bootstrap/js/bootstrap.min.js"></script>';
	

	echo '<link rel="stylesheet" href="styles/main.css"/>';

}

$db = new db();
$session = new session();

requireAbs('resources/twilio-php-master/Services/Twilio.php');

?>