<?php

include( $_SERVER['DOCUMENT_ROOT'] . '/php/helpers/db.php' );

function __autoload($class_name) {	
	
	$includePath = getAbsIncPath('/php/classes/' . $class_name . '.php');
	include ( $includePath );	
	
}

function __loadResources() {

	echo('<link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css"/>');
	echo('<script src="resources/bootstrap/js/bootstrap.min.js"></script>');
	echo('<script src="resources/jquery/jquery-2.1.1.min.js"></script>');

}

?>