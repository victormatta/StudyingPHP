<?php

$host = "localhost";
$user = "root";
$pass = "16112003";
$db = "phpmysql";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>