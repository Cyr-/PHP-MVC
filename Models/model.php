<?php
require 'connect.php';

class Model
{
  public $heading;
  public $string;

  public function __construct() {
    $this->heading  = 'Welcome';
    $this->string   = 'Hello World!';
    $this->template = 'Templates/template.php';
  }
}
