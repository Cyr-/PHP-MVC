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
  public $sprite_url;

  public function __construct($id) {
    $this->id     = $id;
    $pokemon_json = $this->getPokemonAPIValues();
    $sprite_json  = $this->getPokemonSprite($pokemon_json);

    $this->name    = $pokemon_json->name;
    $this->species = ucwords($pokemon_json->species);
    $this->height  = ($pokemon_json->height)/10;
    $this->weight  = ($pokemon_json->weight)/10;

    $this->hp              = $pokemon_json->hp;
    $this->attack          = $pokemon_json->attack;
    $this->defence         = $pokemon_json->defense;
    $this->special_attack  = $pokemon_json->sp_atk;
    $this->special_defence = $pokemon_json->sp_def;
    $this->speed           = $pokemon_json->speed;

    $this->sprite_url = "http://pokeapi.co{$sprite_json->image}";
  }

  private function getPokemonAPIValues() {
    $cache_file = "./Cache/Pokemon/{$this->id}.json";
    $url        = "http://pokeapi.co/api/v1/pokemon/{$this->id}/";

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

  private function getPokemonSprite($pokemon_json) {
    $cache_file = "./Cache/Sprite/{$this->id}.json";
    $url        = "http://pokeapi.co{$pokemon_json->sprites[0]->resource_uri}";

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
