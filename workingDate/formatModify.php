<!-- The date is formated (format) and date modificator (modify). -->

<?php

$date = new DateTime();

echo $date->format("d/m/Y");

$date->modify("+2 months");
echo "<br>";

echo $date->format("D/m/Y");
?>