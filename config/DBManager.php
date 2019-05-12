<?php
namespace Config;


/**
 * 
 */



use PDO;
use Config\AppVar;

class DBManager 
{
    public function __construct() {
        date_default_timezone_set(AppVar::$timeZone);
    }
	
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