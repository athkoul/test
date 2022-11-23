<?php
require "get_token.php";			//require php files to call the functions for token and temperature
require "temperature.php";
require "status.php";
require "init.php";

$tokenaz = get_token();				//take the token and temperature
$temper = get_temperature();
if($temper > 20){					//case of temperature more than 20 message
	$cases = "more than 20C ";
}
else {								//case of temperature less than 20 message
	$cases = "less than 20C ";
}

$response = initsms($tokenaz, $cases, $temper);
status($response);
?>