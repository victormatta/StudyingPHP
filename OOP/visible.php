<?php

class SoccerTeam
{
    private $bornTeam = "1910";
    protected $phrase = "Today have GALO FRITO in lunch!";

    public $teamName;

    public function Corinthians()
    {
        return $this->bornTeam;
    }

    public function CDB()
    {
        return $this->phrase;
    }

    function SCCP($teamName)
    {
        $this->teamName = $teamName;
    }
}

$coringao = new SoccerTeam;

echo $coringao->Corinthians();
echo "<br>";
echo $coringao->CDB();
echo "<br>";
$coringao->SCCP("Sport Club Corinthians Paulista");
echo $coringao->teamName;

?>