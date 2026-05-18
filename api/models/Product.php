<?php

namespace api\models;

use api\core\Database;
use PDO;
class Product{
 
  public static function findAll(){
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM produtos');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

 
  public static function findById(int $id){
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM produtos WHERE id = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}
