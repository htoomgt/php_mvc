<?php
namespace Core;
/**
 * 
 */
use Core\Route as Route;
class Loader 
{
	
	public static function loadView($name)
	{
		$base = Route::base();
		include_once __DIR__."/../view/".$name.".php";

	}

	public static function loadTemplate($name)
	{	
		$base = Route::base();
		include_once __DIR__."/../view/include/".$name.".php";
	}
        
        
}