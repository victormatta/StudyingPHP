<?php

$host = "localhost";
$db = "phpmysql";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

//INSERTING DATAS

$stmt = $conn->prepare("INSERT INTO tools (name, year) VALUES (:name, :year)");

$name = "Shockz";
$year = 2021;

$stmt->bindParam(":name", $name);
$stmt->bindParam(":year", $year);

$stmt->execute();

?>