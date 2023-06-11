<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "phpmysql";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    echo "ERRO NA CONEXÃO! <br>";
    echo "Erro: " . $conn->connect_error;
    exit();
}

?>