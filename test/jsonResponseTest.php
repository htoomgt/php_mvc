<?php
	require_once __DIR__."/../vendor/autoload.php";

	use Lib\JsonResponse as JsonResponse;

	$content = [
		"status" => "OK",
		"message" => "It is fine now"
	];

	JsonResponse::respondContent($content, 200);
	JsonResponse::respondContent($content);