<?php

class People
{
    public $name = "Victor";
    public $age = 19;
    public $job = "Software Developer";
}

class Developer extends People
{
    private $tools = "PHP";

    public function fullStack()
    {
        return $this->tools;
    }
}

$fds = new People;

echo $fds->name;
echo "<br>";
echo $fds->age;
echo "<br>";
echo $fds->job;
echo "<br>";

$victor = new Developer;

echo $victor->name;
echo "<br>";
echo $victor->age;
echo "<br>";
echo $victor->job;
echo "<br>";
echo $victor->fullStack();

?>