<?php

print_r($_POST);
$car = $_POST["car"];
$money = $_POST["money"];
$option = $_POST["option"];

$value1 = $option[0];
$value2 = $option[1];
$value3 = $option[2];

?>

<h1>
    <?= $car ?> -> R$
    <?= $money ?> ->
    <?= $value1 ?> ->
    <?= $value2 ?> ->
    <?= $value3 ?>
</h1>