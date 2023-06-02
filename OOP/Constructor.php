<?php

class Car
{
    public $doors;
    public $color;
    public $brand;
    public $country;

    public function __construct($doors, $color, $brand, $country)
    {
        $this->doors = $doors;
        $this->color = $color;
        $this->brand = $brand;
        $this->country = $country;
    }

}

$porsche = new Car(3, "Black", "Porsche", "Brazil");

echo "My car's $porsche->brand is $porsche->color, has $porsche->doors doors and I living $porsche->country.";

?>