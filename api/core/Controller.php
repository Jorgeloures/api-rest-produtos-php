<?php

namespace api\core;

use api\models\Users;

class Controller{

  public function model($model){
    require 'api/models/' . $model . '.php';
    $classe = 'api\\models\\' . $model;
    return new $classe();
  }

  public function view($view, $data = []){
    extract($data);

    require_once "api/views/$view.php";
  }

  public function pageNotFound(){
    $this->view('erro404');
  }
}
