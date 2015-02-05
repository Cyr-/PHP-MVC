<?php
include_once('Models/model.php');

class Controller {
  private $model;

  public function __construct() {
    $this->model = new Model();
  }

  public function invoke() {
    if (!isset($_GET['id'])) {
      $pokemon = $this->model->getIndex();
      include 'Views/home.php';
    }
    else {
      $pokemon = $this->model->getPokemon($_GET['id']);
      include 'Views/pokemon.php';
    }
  }
}
