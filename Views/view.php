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
    $heading = '<h1>' . $this->model->heading . '</h1>';
    $data    = '<p>' . $this->model->string . '</p>';
    require_once($this->model->template);
  }
}
