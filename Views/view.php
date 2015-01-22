<?php
require 'Controllers/controller.php';

class View
{
  private $model;
  private $controller;

  public function __construct($controller, $model) {
    $this->controller = $controller;
    $this->model      = $model;
  }

  public function output() {
    $data = '<p>' . $this->model->string . '</p>';
    require_once($this->model->template);
  }
}
