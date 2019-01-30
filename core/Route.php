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

	public static function getProjectDirName(){
		$base = str_replace("index.php", "", $_SERVER['PHP_SELF']);
		$arrUri = explode("/",$base);
		$count = count($arrUri);
		$arryLastIndex = $count - 1;
		$projectFileArrayIndex = $count - 2;
		$projectFileName = $arrUri[$projectFileArrayIndex];		
		return $projectFileName;		
	}

	public static function getRequestURI(){
		$arrUri = explode("/",$_SERVER['REQUEST_URI']);
		$countArr = count($arrUri);
		$projectDirName = self::getProjectDirName();
		$projectDirPosition = array_search($projectDirName, $arrUri);		
		
		
		for ($x = $projectDirPosition; $x >= 0; $x--) {
		    unset($arrUri[$x-1]);
		} 
                
		$arrUri = array_merge($arrUri);
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
        
        public static function getRequestMethod()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		return $method;
	}

	
}