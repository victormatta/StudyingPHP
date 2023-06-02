<?php

class Dog
{

    public $color = "black";

    function say(string $name)
    {
        return "The $name SAYS!";
    }

    function walk(string $name)
    {
        static $walk = 0;
        echo "The $name walked: $walk";
        $walk++;
    }
}

$dog1 = new Dog;
echo $dog1->say("Cheetos");
echo "<br>";
echo $dog1->walk("Cheetos");
echo "<br>";
echo $dog1->walk("Cheetos");
echo "<br>";
echo $dog1->walk("Cheetos");
echo "<br>";
echo $dog1->walk("Cheetos");
echo "<br>";
echo $dog1->walk("Cheetos");
echo "<br>";
echo $dog1->say("Cheetos"), $dog1->walk("Cheetos"), $dog1->color;

// class Dog
// {
//     function say(string $name)
//     {
//         return "The $name says!";
//     }

//     function walk(string $name)
//     {
//         static $walk = 0;
//         echo "The $name walked: $walk";
//         $walk++;
//     }
// }

// $dog1 = new Dog();
// echo $dog1->say("Cheetos");
// echo $dog1->walk("Cheetos");
// echo $dog1->walk("Cheetos");
?>