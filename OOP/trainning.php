<?php

class Person
{

    public $name;

    function rightName($name)
    {
        $this->name = $name;
    }

}

$person1 = new Person;
$person1->name;
echo "My name's $person1->name";
echo "<br>";
$person1->rightName("Victor");
echo "My name's $person1->name";

?>