<?php
namespace api\models;
use api\core\Database;
use PDO;

class User{
  public static function findAll(){
    $conn = new Database();
    $result = $conn->executeQuery(
      'SELECT * FROM usuarios ORDER BY id ASC'
    );
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}