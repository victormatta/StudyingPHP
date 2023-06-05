<?php

class Animal
{

    public $name;

    public function nameSET($name)
    {
        $this->name = $name;
    }
}

$JVLR = new Animal;

$JVLR->name;
echo "Animals's name is: $JVLR->name";
echo "<br>";
$JVLR->nameSET("JV&LR");
echo "Animals's name is: $JVLR->name";

?>