<?php

class Person
{
    function say(string $name)
    {
        return "Hello, I'm $name!";
    }
}

$victor = new Person;
$shockz = new Person;

echo $victor->say("VICTOR");
echo "<br>";
echo $shockz->say("SHOCKZ");