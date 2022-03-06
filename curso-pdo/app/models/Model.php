<?php

namespace app\models;

use app\models\Connection;
use app\traits\PersistDb;

abstract class Model{

    use PersistDb;

    protected $connection;

    public function __construct()
    {
        $this->connection = Connection::connect();
    }

    public function all(){
        $sql = "select * from {$this->table}";

        
        $list = $this->connection->prepare($sql);
       
        $list->execute();
        
        return $list->fetchAll();
    }


    public function find($field, $value){
        $sql = "select * from {$this->table} WHERE {$field} = :{$field}";
        $list = $this->connection->prepare($sql);
        //$list->bindValue('id', 3);
        $list->bindValue($field, $value);
        $list->execute();

        return $list->fetch();
    }
    
    public function delete($field, $value){
        $sql = "delete from {$this->table} where $field = ?";

        $delete = $this->connection->prepare($sql);
        $delete->bindValue(1, $value);
        $delete->execute();
        
        return $delete->rowCount();
    }

}