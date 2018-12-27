<?php
namespace Controller;
/**
 * To generate customized random number
 * @author Htoo Maung Thait (htoomaungthait@gmail.com)
 */
use Controller\BaseController;

class RandomNumberController extends BaseController
{
		
	public function getRandomNumber()
	{
		$number = rand(1, 100);

		return $number;
	}

	/***
	* To generate required amount of pin
	* referenced from http://thisinterestsme.com/generating-4-digit-pin-code-php/
	*/
	public function generatePin($digit = 4)
	{
		$i = 0;
		$pin = "";

		while($i < $digit){
			$pin .= mt_rand(0,9);
			$i++;
		}
		return $pin;
	}
}