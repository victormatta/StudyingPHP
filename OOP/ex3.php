<?php

class Person
{
    public $name = "";
    public $age;

    function walk()
    {
        static $walk = 0;
        $walk;
        return $walk++;
    }
}

$person1 = new Person;

$person1->name = "Victor";
$person1->age = 19;
echo "<br>";

echo "My name's $person1->name, I'm $person1->age and I walked: {$person1->walk()}";
echo "My name's $person1->name, I'm $person1->age and I walked: {$person1->walk()}";
echo "My name's $person1->name, I'm $person1->age and I walked: {$person1->walk()}";

?>