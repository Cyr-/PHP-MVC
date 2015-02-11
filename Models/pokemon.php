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
  public $type_one;
  public $type_two;

  public function __construct($id) {
    $this->id = $id;
    $pokemon  = $this->getPokemon();

    $this->name    = ucwords($pokemon['name']);
    $this->species = ucwords($pokemon['genus']) . ' Pokémon';
    $this->height  = $pokemon['height']/10;
    $this->weight  = $pokemon['weight']/10;

    $this->hp              = $pokemon['hp'];
    $this->attack          = $pokemon['attack'];
    $this->defence         = $pokemon['defence'];
    $this->special_attack  = $pokemon['special_attack'];
    $this->special_defence = $pokemon['special_defence'];
    $this->speed           = $pokemon['speed'];

    $this->sprite_url = "Sprites/{$this->id}.png";
  }

  private function getPokemon() {
    include_once 'connect.php';
    $query = "SELECT * FROM pokemon_values WHERE id = {$this->id}";
    $data  = $db->query($query);

    return $data->fetch_assoc();
  }
}
