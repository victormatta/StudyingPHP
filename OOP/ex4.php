<?php

class Car
{
    public $color;
    public $brand;
    public $maxVelocity;

    function setMaxVelocity($maxVelocity)
    {
        $this->maxVelocity = $maxVelocity;
    }

    function getCarVelocity()
    {
        return "$this->maxVelocity km/hr";
    }
}

$bmw = new Car;

$bmw->color = "White";
$bmw->brand = "BMW";
$bmw->setMaxVelocity(250);
$bmw->getCarVelocity();

echo "The $bmw->brand has $bmw->color color and is {$bmw->getCarVelocity()}";

?>