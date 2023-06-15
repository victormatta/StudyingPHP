<?php

$host = "localhost";
$db = "phpmysql";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

//SELECTING DATABASE DATA USING PDO

$id = 0;

$stmt = $conn->prepare("SELECT * FROM tools WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

// $data = $stmt->fetch(PDO::FETCH_ASSOC);

// print_r($data);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($itens);

?>