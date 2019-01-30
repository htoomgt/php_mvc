<?php

/**
 * 
 */
namespace Model;

use Config\DBManager as DBManager;

class BaseModel 
{
	protected $dbm = null;

	public function __construct()
	{
		$dbm = new DBManager();		
	}
        
        public function getDefaultConnection(){
            
            $this->dbConnection = $dbm->getDefaultConnection();
        }
	
}