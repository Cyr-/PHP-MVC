<?php
class Pokemon
{
  public $id;
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

  public function __construct($id) {
    $this->id     = $id;
    $pokemon_json = $this->getPokemonAPIValues($this->id);

    $this->name    = $pokemon_json->name;
    $this->species = ucwords($pokemon_json->species);
    $this->height  = $pokemon_json->height;
    $this->weight  = $pokemon_json->weight;

    $this->hp              = $pokemon_json->hp;
    $this->attack          = $pokemon_json->attack;
    $this->defence         = $pokemon_json->defense;
    $this->special_attack  = $pokemon_json->sp_atk;
    $this->special_defence = $pokemon_json->sp_def;
    $this->speed           = $pokemon_json->speed;
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
