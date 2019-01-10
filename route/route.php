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
	$requestMethod = $_SERVER['REQUEST_METHOD'];

	// print_r($requestURI); exit();
	/*echo "<pre>";
	print_r($_SERVER);
	echo "</pre>";
        exit();*/
        // echo Route::getProjectDirName();
        // var_dump(Route::getProjectDirName());
        // exit();

        $requestURI = Route::getRequestURI();
    

	if(isset($requestURI[1])){
		$apiStatus = Route::checkApiStatus($requestURI[1]);

		if($apiStatus == true){
			$route = $requestURI[2];	
		}
		else{
			$route = $requestURI[1];		
		}
		
		// $route = strtolower($route);
		// echo $route; exit();


	}
	else{
		echo "Requested route not found 404!";
		exit();
	}

	//checking route parameter value
	if($route=="home" || $route==""){			
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

