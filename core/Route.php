<?php
namespace Core;
/**
 * Related with route of frame
 * @author Htoo Maung Thait (htoomaungthait@gmail.com)
 */
class Route 
{
	
	
	public static function base(){
		$base = str_replace("index.php", "", $_SERVER['PHP_SELF']);
		$serverName = $_SERVER["SERVER_NAME"];
		$requestScheme = $_SERVER["REQUEST_SCHEME"];

		$baseURL = $requestScheme."://".$serverName.$base;

		return $baseURL;		
	}

	public static function getRequestURI(){
		$arrUri = explode("/",$_SERVER['REQUEST_URI']);
		return $arrUri;
	}

	public static function getQueryString(){
		$string = $_SERVER['QUERY_STRING'];
		return $string;
	}

	public static function checkApiStatus($uriFragment){
		$apiStatus = false;
		if($uriFragment == 'api'){
			$apiStatus = true;
		}
		
		return $apiStatus;
	}

	
}