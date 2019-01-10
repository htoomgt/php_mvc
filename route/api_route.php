<?php
require_once __DIR__."/../vendor/autoload.php";
use Lib\JsonResponse;

if($route== "getIdiot"){		
	// echo "Here are idiots !";
	$content = [
		[
			"movieName" => "Rancho",
			"actorName" => "Aamir Khan",
			"imageUrl"  => "https://m.media-amazon.com/images/M/MV5BMjMxZmFmNWItYWRjOS00OTQ0LWFkNGMtOWU3YTYyNTEyMTA2XkEyXkFqcGdeQXVyMjU4OTI3OA@@._V1_SY100_CR68,0,100,100_AL_.jpg"
		],
		[
			"movieName" => "Raju Rastogi",
			"actorName" => "Sharman Joshi",
			"imageUrl"  => "https://ninesilos.files.wordpress.com/2013/07/raju-rastogi.jpg"
		],
		[
			"movieName" => "Fahan Qureshi",
			"actorName" => "R.Madhavan",
			"imageUrl"  => "https://resize.indiatvnews.com/en/centered/oldbucket/715_431/entertainmentbollywood/IndiaTvf16e2e_r-madhavan-injured.jpg"
		],
	];
	

	JsonResponse::respondContent($content);
	exit();

}