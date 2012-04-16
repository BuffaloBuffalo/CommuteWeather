<?php 
	
 	define('WEATHER_API_KEY', "2143fccf965e9aea");
 	define('WEATHER_URL_PREFIX',"http://api.wunderground.com/api/");
 	$zipCode= 14228;
 	$url ='http://localhost/workspace/CommuteWeather/test.php';# constant('WEATHER_URL_PREFIX').constant('WEATHER_API_KEY')."/hourly/q/$zipCode.json";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	
	$rawResult = curl_exec($ch);
	curl_close($ch);
	$jsonBody =  json_decode($rawResult);
	
	class TestController{
		function doGet(){
			$this->view->message = 'You are not logged in.';
			include 'views/landing.php';
		}
	}
	
	$test = new TestController;
	$test->doGet();
	#doGet();
	
	#echo $view;
	#echo $jsonBody->hourly_forecast[0]->FCTTIME->pretty;
	#echo $jsonBody->hourly_forecast[0]->temp->english." F";
	

