<?php
function initsms($token, $cases, $temper){ //Function to call the SMS Service and execute it with our variables temp and cases

	$curl = curl_init();
	curl_setopt_array($curl, array(		//the call of the send sms API
		CURLOPT_URL => "https://connect.routee.net/sms",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "{ \"body\": \"Your name and Temperature {$cases}.  {$temper}C\",\"to\" : \"+306948872100\",\"from\": \"amdTelecom\"}",	//the sms that will be sent.
		CURLOPT_HTTPHEADER => array(
		"authorization: Bearer {$token}",
		"content-type: application/json"
  ),
));
	$response = curl_exec($curl);		//Take the response to check if everything gone right
	$err = curl_error($curl);			//Take the error of response if there is one
	curl_close($curl);
	if ($err) {
	echo "cURL Error  on the SMS API#:" . $err;		//Echo a message for error in case of curl Error
	die;
	}
	else {
		return $response;
	}
}
?>