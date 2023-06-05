<!-- Show the specific time zone on screen. -->

<?php

date_default_timezone_set("America/Sao_Paulo");
// date_default_timezone_set("America/New_York");

$timeZoneDate = new DateTime();

print_r($timeZoneDate);
echo "<br>";

?>