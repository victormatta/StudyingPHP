<?php

$filme = [
    "title" => "Pokemon",
    "sinopse" => "Ash catch Pikachu",
    "year" => 2023,
    "hours" => [
        "16:00",
        "20:00",
        "22:00"
    ]
];

$jsonstr = json_encode($filme);

echo $jsonstr;

?>