<?php

trait testing
{
    public $name = "Victor";
    public function Test()
    {
        echo "My name's $this->name.";
    }
}

class Origin
{
    use testing;
}

$finish = new Origin;

$finish->Test();

?>