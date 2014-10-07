<?php 

//include($_SERVER['DOCUMENT_ROOT'] . 'preload.php');		
		
global $message;

$config = GetConfig('twilio');
 
$client = new Services_Twilio($config['sid'], $config['token']);
 
$msg = $client->account->messages->create([
    "From" => $config['caller'],
    "To" => $_REQUEST['phone'] ? $_REQUEST['phone'] : $_SESSION['user']->phonenumber,
    "Body" => $message,
]);

// Display a confirmation message on the screen
echo "Sent message {$message}";

?>