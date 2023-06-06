<?php

if ($_GET["name"]) {
    $name = $_GET["name"];
    $age = $_GET["age"];
} else {
    $name = "undefined";
    $age = "undefined";
}

?>

<h1>Your name's
    <?= $name ?> and you're
    <?= $age ?> y
</h1>