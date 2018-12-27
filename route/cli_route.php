<?php
	
use Controller\RandomNumberController as RandNumCtl;

	$randNumCtl = new RandNumCtl();

		if($argv[1] == "Home"){
			echo "This is CLI home.";
			exit();
		}

		if($argv[1] == "rand"){
			echo $randNumCtl->getRandomNumber();
			exit();
		}

		if($argv[1] == "getPin"){
			$digit = null;

			if(isset($argv[2])){
				$digit = $argv[2];
			}
			
			echo $randNumCtl->generatePin($digit);
			exit();
		}
	