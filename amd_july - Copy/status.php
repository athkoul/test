<?php
function get_temperature(){
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "http://api.openweathermap.org/data/2.5/weather?q=Thessaloniki&appid=b385aa7d4e568152288b3c9f5c2458a5&units=metric");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 			//the opt to take the return JSON
$out = curl_exec($ch);
$err = curl_error($ch);
curl_close($ch);
if ($err) {
		echo "cURL Error Authentication Api#:" . $err;	//Inform about curl error
		die;
	 }	
else {
		$out = json_decode($out);		//decode the JSON into Object
		if(isset($out->main->temp)){
			$temper = $out->main->temp; 						
			return $temper;								//take the temperature from the object and return it
		}
		else{
			echo "Problem with the temperature API </br>";
			print_r(json_encode($out));
			die;
		}
	}
}
?>