<?php
class Model
{
  public $string;

  public function __construct() {
    $this->string   = 'Hello World!';
    $this->template = 'Templates/template.php';
  }
}
