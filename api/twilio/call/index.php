<?php

	include($_SERVER['DOCUMENT_ROOT'] . 'preload.php');		
			
	$config = GetConfig('twilio');
	 
	$client = new Services_Twilio($config['sid'], $config['token'],'2010-04-01');
	 
	$message = $client->account->calls->create(
	    $config['caller'],"07837976039","http://demo.twilio.com/welcome/voice/"
	);

	// Display a confirmation message on the screen
	echo "Call Connected";