<?php
function tokena(){			//this function gets and returns the token
	
$curl = curl_init();
curl_setopt_array($curl, array(                           //The call of API for the token.
  CURLOPT_URL => "https://auth.routee.net/oauth/token",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "grant_type=client_credentials",
  CURLOPT_HTTPHEADER => array(
    "authorization: Basic NTdjZDgzYTNlNGIwNDY0YjkxMTliYTQ2Ok9YcjdXWWNQOUE=",
    "content-type: application/x-www-form-urlencoded"
  ),
));
$response = curl_exec($curl);							//the response of the API call. It is a json
$err = curl_error($curl);								//the case of curl error
curl_close($curl);

if ($err) {
	echo "cURL Error Authentication Api#:" . $err;		//Inform about curl error
	die;
}	
else {
	return $response; 
}
}
?>