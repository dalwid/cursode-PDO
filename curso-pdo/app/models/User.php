<?php

namespace app\models;

class user  extends Model{

    protected $table = 'users';

   /* public function insert(array $attributes){
        $sql = "INSERT INTO {$this->table}(nome, email, senha) values (:nome, :email, :senha)";

        $insert = $this->connection->prepare($sql);

       //foreach ($attributes as $key => $value) {
         //  $insert->bindValue($key, $value);
       //}        

        return $insert->execute($attributes);

    }*/

    /*public function update(array $attributes){
      $sql = "update {$this->table} set nome = :nome, email = :email, senha = :senha where id = :id";
      $update = $this->connection->prepare($sql);
      $update->execute($attributes); 

      return $update->rowCount();
    }*/

}