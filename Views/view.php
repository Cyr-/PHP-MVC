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
    $title        = $this->model->title;
    $content      = $this->model->content;
    $created_at   = $this->model->created_at;

    require_once($this->model->template);
  }
}
