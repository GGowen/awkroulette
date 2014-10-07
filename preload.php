<?php

include( $_SERVER['DOCUMENT_ROOT'] . '/php/helpers/db.php' );

function __autoload($class_name) {	
	
	$includePath = getAbsIncPath('/php/classes/' . $class_name . '.php');
	include ( $includePath );	
	
}

?>