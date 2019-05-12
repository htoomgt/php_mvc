<?php
namespace Model;
require_once __DIR__."/../vendor/autoload.php";
/**
 * 
 */


use Config\DBManager as DBManager;

class BaseModel 
{
	protected $dbm = null;

	public function __construct()
	{
		$this->dbm = new DBManager();		
	}
        
        public function getDefaultConnection(){
            
            return $this->dbm->getDefaultDbConnection();
        }
	
}
//$obj = new \Model\BaseModel();
//$dbh = $obj->getDefaultConnection();
//var_dump($dbh);
