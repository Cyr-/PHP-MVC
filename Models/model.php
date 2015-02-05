<?php
include_once('Models/pokemon.php');

class Model {
  // public function __construct() {
  //   $this->template = 'Templates/template.php';
  //   $this->id = 0;
  //   if ($this->id !=0) {
  //     $pokemon_json   = $this->getPokemonAPIValues($this->id);
  //
  //     $this->name   = $pokemon_json->name;
  //     $this->height = $pokemon_json->height;
  //     $this->weight = $pokemon_json->weight;
  //   }
  // }
  public function getIndex() {
  }

  public function getPokemon($id)
    {
      $pokemon = new Pokemon($id);
      return $pokemon;
    }
}
