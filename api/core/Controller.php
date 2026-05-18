<?php

namespace api\core;

use api\models\Users;

class Controller{

  public function model($model){
    require 'api/models/' . $model . '.php';
    $classe = 'api\\models\\' . $model;
    return new $classe();
  }
  
  public function view(string $view, $data = []){
    require 'api/views/' . $view . '.php';
  }

  public function pageNotFound(){
    $this->view('erro404');
  }
}
