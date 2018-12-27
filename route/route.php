<?php

use Controller\HomeController as HomeController;
use Config\AppVar as AppVar;
use Core\Route as Route;
use Lib\JsonResponse as JsonResponse;

	

	$homeController = new HomeController();


	//checking for route parameter existence
	$route = null;	
	$requestURI = Route::getRequestURI();
	$apiStatus = false;

	// print_r($requestURI); exit();

	if(isset($requestURI[3])){
		$apiStatus = Route::checkApiStatus($requestURI[3]);

		if($apiStatus == true){
			$route = $requestURI[4];	
		}
		else{
			$route = $requestURI[3];		
		}
		
		// $route = strtolower($route);
		// echo $route; exit();


	}
	else{
		echo "Requested route not found 404!";
		exit();
	}

	//checking route parameter value
	if($route=="home"){		
		$homeController->homePage();
		exit();

	}
	if($route=="about"){
		$homeController->aboutPage();
		exit();
	}
	if($route=="contact"){
		$homeController->contactPage();
		exit();
	}

	include_once(__DIR__."/api_route.php");

