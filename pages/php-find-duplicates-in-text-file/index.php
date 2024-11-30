<?php

$emails = file("names.txt");

$count_array = array();

foreach($emails as $email) {
	$email = trim($email);
	if(array_key_exists($email,$count_array)) {
		$count_array[$email]++;
	} else {
		$count_array[$email] = 1;
	}
}

foreach($count_array as $key => $value) {
	if($value>1)
		print $key . ' = ' . $value . "\n"; 
	
}

?>
