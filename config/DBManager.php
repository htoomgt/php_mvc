<?php

/**
 * 
 */

namespace Config;

use PDO;
use AppVar;

class DBManager 
{
	
		public function getDefaultDbConnection(){
			
			$host = AppVar::$mysqlHostName;
            $username = AppVar::$mysqlUserName;
            $passwords = AppVar::$mysqlPasswords;
            $dbname = AppVar::$mysqlDB;


			try {
				$connection = new PDO('mysql:host='.$host.';dbname='.$dbname,$username, $passwords);	
			} catch (PDOException $e) {
				echo $msg = "Database connection error : ".$e->getMessage();
				
			}
			
			
			return $connection;

		}


}