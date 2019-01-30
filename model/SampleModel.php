<?php
namespace Model;


use Model\BaseModel as BaseModel;
use Model\VO\SampleVO as SampleVO;
use PDO;
use Swoole\MySQL\Exception;

/**
 * Description of SampleModel
 * Related with tbl_sample table and all database operations related to that table will be carried out in this table
 *
 * @author Htoo Maung Thait
 */
class SampleModel extends BaseModel{
    
    
    public function __construct() {
        parent::__construct();
    }

    /***
     * For inserting passed data
     * 
     * @author Htoo Maung Thait <htoomaungthait@gmail.com>
     * @since  V 1.0
     * @param SampleVO $data The data with sample VO
     * @param string status
     * @return string status fail or success
     */
    public function insert(SampleVO $data){
        
        $status = "fail";
        $dbh = $this->getDefaultConnection();
        $sql = "INSERT INTO tbl_sample 
                (`first_name`, `last_name`, `email`, `password`, `status`, `note`, `created_at`, `updated_at`)
                VALUES
                (:firstName, :lastName, :email, :password, :status, :note, :created_at, :updated_at)
                ";
                
        $sth = $dbh->prepare($sql);
        
        //parameter binding
        $sth->bindValue(':firstName', $data->getFirstName(), PDO::PARAM_STR);
        $sth->bindValue(':lastName', $data->getLastName(), PDO::PARAM_STR);
        $sth->bindValue(':email', $data->getEmail(), PDO::PARAM_STR);
        $sth->bindValue(':password', $data->getPassword(), PDO::PARAM_STR);
        $sth->bindValue(':status', $data->getStatus(), PDO::PARAM_STR);
        $sth->bindValue(':note', $data->getNote(), PDO::PARAM_STR);
        $sth->bindValue(':created_at', $data->getCreatedAt(), PDO::PARAM_STR);
        $sth->bindValue(':updated_at', $data->getUpdatedAt(), PDO::PARAM_STR);
        try {
            $dbh->beginTransaction();
            $sth->execute();
            $dbh->commit();
            $status = "success";
        } catch (PDOException $ex) {
            $dbh->rollback();
            $status = "fail";
        } finally {
            $sth = null;
            $dbh = null;
        }
        return $status;
    }
    
    /***
     * To update table record of sample table by primary key id
     * 
     *  @author Htoo Maung Thait <htoomaungthait@gmail.com>
     *  @since v 1.0
     *  @param SampleVO $data
     *  @return string status fail or success
     */
    public function updateAllById(SampleVO $data){
        $status = "fail";        
        $dbh = $this->getDefaultConnection();
       
        $sql = "UPDATE tbl_sample SET
                `first_name` = :firstName,
                `last_name` = :lastName,
                `email` = :email,
                `password` = :password,
                `status` = :status,
                `note` = :note,
                `updated_at` = :created_at,
                WHERE id = :id ;
            ";
        $sth = $dbh->prepare($sql);
        
        //parameter binding
        $sth->bindValue(':firstName', $data->getFirstName(), PDO::PARAM_STR);
        $sth->bindValue(':lastName', $data->getLastName(), PDO::PARAM_STR);
        $sth->bindValue(':email', $data->getEmail(), PDO::PARAM_STR);
        $sth->bindValue(':password', $data->getPassword(), PDO::PARAM_STR);
        $sth->bindValue(':status', $data->getStatus(), PDO::PARAM_STR);
        $sth->bindValue(':note', $data->getNote(), PDO::PARAM_STR);
        $sth->bindValue(':updated_at', $data->getUpdatedAt(), PDO::PARAM_STR);
        $sth->bindValue(':id', $data->getId(), PDO::PARAM_STR);
        
        try {
            $dbh->beginTransaction();
            $sth->execute();
            $dbh->commit();
            $status = "success";
        } catch (PDOException $ex) {
            $dbh->rollback();
            $status = "fail";
        } finally {
            $sth = null;
            $dbh = null;
        }
        return $status;
        
    }
    
    /***
     * To delete table record of sample table by primary key id
     * 
     *  @author Htoo Maung Thait <htoomaungthait@gmail.com>
     *  @since v 1.0
     *  @param int $$id tbl_sample primary key
     *  @return string status
     */
    public function deleteById($id){
        $status = "fail";        
        $dbh = $this->getDefaultConnection();
        $sql = "DELETE FROM tbl_sample WHERE id = :id ;";
        $sth = $dbh->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        
        try {
            $dbh->beginTransaction();
            $sth->execute();
            $dbh->commit();
            $status = "success";
        } catch (PDOException $ex) {
            $dbh->rollback();
            $status = "fail";
        } finally {
            $sth = null;
            $dbh = null;
        }
        return $status;
    }
    
    /**
     * To retrieve all data by id
     * 
     * @author Htoo Maung Thait <htoomaungthait@gmail.com>
     * @since v 1.0
     * @param int $id tbl_sample primary key
     * @return array [status, retrieved_result] [string $status, array $result]
     */
    public function retrieveAllById($id){
        $status = "fail";  
        $result = null;
        $dbh = $this->getDefaultConnection();
        $sql = "SELECT * FROM tbl_sample WHERE id = :id;";
        $sth = $dbh->prepare($sql);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        
        try {
            $dbh->beginTransaction();
            $sth->execute();
            $dbh->commit();
            
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);   //fetching Associated Array
            $status = "success";
        } catch (PDOException $ex) {
            $dbh->rollback();
            $status = "fail";
        } finally {
            $sth = null;
            $dbh = null;
        }
        return ["status" => $status, "result" => $result];
        
        
    }
    
    
    
}
