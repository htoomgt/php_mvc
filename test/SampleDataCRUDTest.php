<?php
namespace Test;
require __DIR__.'/../vendor/autoload.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SampleDataCRUD
 *
 * @author htoo maung thait <htoomaungthait@gmail.com>
 */

use Model\SampleModel as SampleModel;
//use Model\VO\SampleVO as SampleVO;
use Model\VO\SampleVO;

class SampleDataCRUDTest {
    private $sampleModel = null;
    private $sampleVO = null;
    private $createdAt = null;
    private $updatedAt = null;
    private $dateTimeFormat = null;
    
    public function __construct() {
        $this->sampleVO = new SampleVO();
        $this->sampleModel = new SampleModel();
        var_dump($this->sampleVO); exit();
        $this->dateTimeFormat = Config\AppVar::$defaultDateTimeFormat;
        $this->createdAt = date($this->dateTimeFormat);
        $this->updatedAt = date($this->dateTimeFormat);
        
        $sampleVO->setFirstName("John");
        $sampleVO->setLastName("Doe");
        $sampleVO->setEmail("johndoe@gmail.com");
        $sampleVO->setPassword("JooWwx32*");
        $sampleVO->setStatus("active");
        $sampleVO->setNote("this is a sample note.");
        $sampleVO->setCreatedAt($this->createdAt);
        $sampleVO->setUpdatedAt($this->updatedAt);
        
        
    }
    
    public function testInsert()
    {
        $status = $this->sampleModel->insert($this->sampleVO);
        echo $status;
    }
    
    public function testUpdateById($id)
    {
        $this->sampleVO->setId($id);
        $status = $this->sampleModel->updateAllById($this->sampleVO);
        echo $status;
    }
    
    public function testDeleteById($id)
    {
        $status = $this->sampleModel->deleteById($id);
        echo $status;
    }
    public function testRetrievedById($id){
        $respond = $this->sampleModel->retrieveAllById($id);
        $status = $respond['status'];
        $result = $respond['result'];
        
        echo $status;
        echo "\n";
        var_dump($result);
        
        
        
    }
    
    
}

$obj = new SampleDataCRUDTest();
//$obj->testInsert();
