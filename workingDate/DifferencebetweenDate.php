<!-- Show the difference between dates. -->

<?php

$dateA = new DateTime();
$dateB = new DateTime();

$dateB->setDate(2023, 11, 16);

$diffDate = $dateA->diff($dateB);
print_r($diffDate);

echo "<br>";

echo $diffDate->format("%a days");

?>