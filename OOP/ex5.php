<?php

class Human
{
    public $name;
    public $age;
    public $job;
    public $heartTeam;

    function speak($heartTeam)
    {
        $this->heartTeam = $heartTeam;
    }
}

class Teacher extends Human
{
    public $schoolName;

    public $subject;

    function subjectName($subject)
    {
        return $this->subject = $subject;
    }
}

$victor = new Human;

echo $victor->name = "Victor";
echo "<br>";
echo $victor->age = 19;
echo "<br>";
echo $victor->job = "Full Stack Developer";
echo "<br>";
echo $victor->heartTeam = "Sport Club Corinthians Paulista";
echo "<br>";
$victor->speak("SCCP");
echo $victor->heartTeam;
echo "<br>";

$matheus = new Teacher;

echo $matheus->name = "Matheus";
echo "<br>";
echo $matheus->age = 29;
echo "<br>";
echo $matheus->job = "Developer Teacher";
echo "<br>";
echo $matheus->schoolName = "Hora de Codar";
echo "<br>";
echo $matheus->subject = "Web Development";
echo "<br>";
$matheus->subjectName("Web Developer / Hora de Codar");
echo $matheus->subject;
echo "<br>";

?>