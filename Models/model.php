<?php

class Model
{
  public $title;
  public $content;
  public $created_at;

  public function __construct() {
    $this->template    = 'Templates/template.php';

    $blog              = $this->get_blog_post(1);

    $this->title       = $blog['title'];
    $this->content     = $blog['content'];
    $this->created_at  = $blog['created_at'];
  }

  private function get_blog_post($id) {
    require 'connect.php';
    $blog_query = "SELECT * FROM blog_posts WHERE id = '{$id}'";
    $blog_data  = $db->query($blog_query);

    return $blog_data->fetch_assoc();
  }
}
