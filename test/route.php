<?php
	require_once __DIR__."/../vendor/autoload.php";

	use Core\Route as Route;

	echo "query string is ".Route::getQueryString();
