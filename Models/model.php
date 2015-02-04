<?php

class Model
{
  public $name;
  public $height;
  public $weight;
  public $species;
  public $hp;
  public $attack;
  public $defence;
  public $special_attack;
  public $special_defence;
  public $speed;

  public function __construct() {
    $this->template = 'Templates/template.php';
    $pokemon_json   = $this->getPokemonAPIValues(25);

    $this->name   = $pokemon_json->name;
    $this->height = $pokemon_json->height;
    $this->weight = $pokemon_json->weight;
  }

  private function getPokemonAPIValues($id) {
    $cache_file = "./Cache/Pokemon/{$id}.json";
    $url        = "http://pokeapi.co/api/v1/pokemon/{$id}/";

    if (is_file($cache_file)) {
      if ($this->timePassed($cache_file)) {
        $this->cacheFile($url, $cache_file);
      }
    }
    else {
      $this->cacheFile($url, $cache_file);
    }

    return json_decode(file_get_contents($cache_file));
  }

  private function timePassed($file) {
    $time_passed = (strtotime("now") - filemtime($file));

    return $time_passed > 60*60*24*30;
  }

  private function cacheFile($url, $file) {
    $json = file_get_contents($url);
    file_put_contents($file, $json);
  }
}
