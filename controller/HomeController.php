<?php
namespace Controller;

/**
 * Common page controller
 * @author Htoo Maung Thait (htoomaungthait@gmail.com)
 */


use Controller\BaseController as BaseController;
use Config\AppVar as AppVar;
use Core\Loader as Loader;
use Core\Route as Route;

class HomeController extends BaseController
{
	
	
	public function homePage()
	{
		$appName = AppVar::$appName;		
		
		Loader::loadTemplate("header");
		Loader::loadView("home");
		Loader::loadTemplate("footer");
	}
	
	public function aboutPage()
	{
		$appName = AppVar::$appName;
		Loader::loadTemplate("header");
		Loader::loadView("aboutUs");
	}

	public function contactPage()
	{
		$appName = AppVar::$appName;
		Loader::loadTemplate("header");
		Loader::loadView("contactUs");
		Loader::loadTemplate("footer");
	}

}