<?php
require "token.php";
function get_token(){
	$response = tokena();
	$response = json_decode($response);
	if(isset($response->access_token)) {				//If we get a token in the object then we are ok and we can return the token
		$token = $response->access_token;
		return $token;
	}
	else {												//Else we print the json that contains the status code of the error
		echo "Problem with the Token Api </br>";
		print_r(json_encode($response));
		die;
	}
}
?>