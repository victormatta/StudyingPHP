<!-- //Add a date when date conversion is successful. -->

<?php

$fiveDays = strtotime("5 days");

echo date("d/m/Y", $fiveDays);
echo "<br>";

$fiveMonths = strtotime("5 months");

echo date("d/m/Y", $fiveMonths);
echo "<br>";

$twoYears = strtotime("2 years");

echo date("d/m/Y", $twoYears);
echo "<br>";

echo $fiveDays;
echo "<br>";
echo $fiveMonths;
echo "<br>";
echo $twoYears;
echo "<br>";

?>