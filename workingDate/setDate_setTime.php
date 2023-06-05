<!-- Set date and set time functions. -->

<?php

$date10 = new DateTime();
print_r($date10);
$date10->setDate(2024, 06, 05);
echo "<br>";
print_r($date10);
$date10->setTime(18, 30, 00);
echo "<br>";
print_r($date10);

?>