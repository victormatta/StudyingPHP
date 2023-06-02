<?php

class Human
{

}

class Animal
{

}

class Teacher extends Human
{

}

$victor = new Human;
$matheus = new Teacher;
$JVLR = new Animal;

if ($victor instanceof Human) {
    echo "He is Human.";
} else {
    echo "He isn't Human.";
}

echo "<br>";

if ($victor instanceof Teacher) {
    echo "He is Teacher.";
} else {
    echo "He isn't Teacher.";
}

echo "<br>";

if ($victor instanceof Animal) {
    echo "He is Animal.";
} else {
    echo "He isn't Animal.";
}

echo "<br>";

if ($matheus instanceof Teacher) {
    echo "He is Teacher.";
} else {
    echo "He isn't Teacher.";
}

echo "<br>";

if ($matheus instanceof Human) {
    echo "He is Human.";
} else {
    echo "He isn't Human.";
}

echo "<br>";

if ($JVLR instanceof Animal) {
    echo "They are Animal.";
} else {
    echo "They aren't Animal.";
}

echo "<br>";

if ($JVLR instanceof Human) {
    echo "They are Human.";
} else {
    echo "They aren't Human.";
}

echo "<br>";

if ($JVLR instanceof Teacher) {
    echo "They are Teacher.";
} else {
    echo "They aren't Teacher.";
}

echo "<br>";

?>