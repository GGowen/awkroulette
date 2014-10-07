<?php 

include($_SERVER['DOCUMENT_ROOT'] . 'preload.php');		
		
$config = GetConfig('twilio');
 
$client = new Services_Twilio($config['sid'], $config['token']);
 
$message = $client->account->messages->create([
    "From" => $config['caller'],
    "To" => "07837976039",
    "Body" => "Test message!",
]);

// Display a confirmation message on the screen
echo "Sent message {$message->sid}";


?>