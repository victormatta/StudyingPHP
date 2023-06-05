<!-- mktime => É uma forma de criar uma data específica. -->

<?php

$dateOfDate = mktime(10, 30, 00, 11, 16, 2003);
echo date("d/m/Y", $dateOfDate);

echo "<br>";

$rafersonBirth = mktime(11, 00, 00, 02, 14, 2014);
echo date("d/m/Y", $rafersonBirth);

?>