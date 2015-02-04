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
    $name   = $this->model->name;
    $height = $this->model->height;
    $weight = $this->model->weight;

    require_once($this->model->template);
  }
}
