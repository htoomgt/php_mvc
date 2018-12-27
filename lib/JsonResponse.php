<?php
namespace Lib;

class JsonResponse
{
	public static $test = "Hello";

	
	/***
	*
	 *@param : array $content
	 *
	 *@return : json
	 */
	public static function respondContent($content, $http_status = null)
	{
		if(isset($http_status)){
			http_response_code($http_status);
		}

		header('Content-Type: application/json');
		$response = json_encode($content, JSON_PRETTY_PRINT);
		echo $response;
		exit();
	}
	



	
}

// $content = [
// 	"status" => "OK",
// 	"message" => "It is fine now"
// ];

// JsonResponse::respondContent($content, 200);
// JsonResponse::respondContent($content);
// $obj = new JsonResponse();
// $obj->respondContent($content, 200);