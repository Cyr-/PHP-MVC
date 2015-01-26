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
    $title        = '<h1>' . $this->model->title . '</h1>';
    $content      = '<p>' . $this->model->content . '</p>';
    $created_at   = '<p>' . $this->model->created_at . '</p>';

    require_once($this->model->template);
  }
}
