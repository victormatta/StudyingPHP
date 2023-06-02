<?php

abstract class Eleven
{
    public static function Endo()
    {
        echo "Endo is Inazuma Eleven's goalpeacker!";
    }
}

class Corinthians extends Eleven
{
    public function Cassio()
    {
        echo "Cássio é o goleiro do Corinthians!";
    }
}

Eleven::Endo();
echo "<br>";
$goleiroSCCP = new Corinthians;
$goleiroSCCP->Cassio();
echo "<br>";
$goleiroSCCP->Endo();
?>