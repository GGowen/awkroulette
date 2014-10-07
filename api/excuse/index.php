<?php

include($_SERVER['DOCUMENT_ROOT'] . 'preload.php');

$verbs = [
	'waiting',
	'angry',
	'horny',
	'stupid',
	'hungry',
	'boring'
];

$places = [
	'the police station',
	'the hospital',
	'the strip club',
	'the brothel',
	'the pub',
	'the other party',
	'school',
	'work'	
];

$people = [
	'girlfriend',
	'support worker',
	'wife',
	'mother',
	'sister',
	'brother',
	'friend',
	'vicar',
	'boss'
];

$activities = [
	'play football with',
	'swim with',	
	'have sex with',
	'have dinner with',
	'seduce',
	'meet',
	'kill'
];

$phrases = [
	"I have to go to the " . $places[array_rand($places)],
	'My ' . $people[array_rand($people)] . ' is ' . $verbs[array_rand($verbs)],
	"I need to go and " . $activities[array_rand($activities)] . " my " . $people[array_rand($people)]
];

$message = $phrases[array_rand($phrases)];

requireAbs("api/twilio/message/index.php");
