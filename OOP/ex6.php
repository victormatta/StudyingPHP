<?php

class Cat
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}

$juvendinho = new Cat("Juvendinho", "Orange");
$luisroberto = new Cat("Luis Roberto", "White");

echo "$juvendinho->name is a $juvendinho->color cat!";
echo "<br>";
echo "$luisroberto->name is a $luisroberto->color cat!";

?>