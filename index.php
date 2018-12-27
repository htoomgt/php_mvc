<?php
	/****
		Welcome from the pure php mvc";
		@author Htoo Maung Thait

	*/
	require_once __DIR__. "/vendor/autoload.php";
	
	//For CLI route
	if(isset($argv)){		
		include(__DIR__."/route/cli_route.php");
	}
		
	//For Web route
	include(__DIR__."/route/route.php");


