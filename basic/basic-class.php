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
}

class ShowInfo
{
  public function getInfo(Bike $bike)
  {
    return "Merk: {$bike->merk} | Gear: {$bike->gear} | Type: {$bike->gear} | Price: {$bike->price}";
  }
}

$bike1 = new Bike('Polygon', 7, 'RELIC20', 1700000);
$bike_info = new ShowInfo();

echo "<h3>{$bike_info->getInfo($bike1)}</h3>";
