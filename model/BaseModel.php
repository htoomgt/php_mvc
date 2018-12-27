<?php

/**
 * 
 */
namespace Model;

use  Config\DBManger as DBManger;

class BaseModel 
{
	protected $dbConnection = null;

	function __construct()
	{
		$dbm = new DBManger();
		$this->dbConnection = $dbm->getDefaultConnection();
	}
	
}