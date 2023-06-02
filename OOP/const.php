<?php

class Human
{
    public const EYES = 2;
    public const ARMS = 2;
    public const LEGS = 2;

    function showConst()
    {
        echo self::ARMS;
    }
}

$victor = new Human;

echo $victor::EYES;
echo "<br>";
echo $victor->showConst();

?>