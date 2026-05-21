<?php
use api\core\Controller;
class User extends Controller{
  public function index(){
    $User = $this->model('User');
    $data = $User::findAll();
    $this->view('usuarios/index', ['usuarios' => $data]);
  }

}