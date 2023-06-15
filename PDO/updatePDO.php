<?php

$host = "localhost";
$db = "phpmysql";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

//UPDATING DATABASE DATA

$id = 12;
$name = "Victor";
$year = 2020;

$stmt = $conn->prepare("UPDATE tools SET name = :name, year = :year WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":name", $name);
$stmt->bindParam(":year", $year);

$stmt->execute();

?>