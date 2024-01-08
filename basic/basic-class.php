<?php

class Bike
{

  public $merk,
    $gear,
    $type,
    $price;

  public function __construct($merk, $gear, $type, $price = 0)
  {
    $this->merk = $merk;
    $this->gear = $gear;
    $this->type = $type;
    $this->price = $price;
  }

  public function getInfo()
  {
    return "Merk: {$this->merk} | Gear: {$this->gear} | Type: {$this->gear} | Price: {$this->price}";
  }
}

$bike1 = new Bike('Polygon', 7, 'RELIC20', 1700000);
$bike_info = $bike1->getInfo();

echo "<h3>{$bike_info}</h3>";
