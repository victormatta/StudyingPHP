<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "phpmysql";

$conn = new mysqli($host, $user, $pass, $db);

//CONNECTION WITH MYSQLI

$sql = "SELECT * FROM tools";

$resultSQL = $conn->query($sql);

print_r($resultSQL);

echo "<br>";

//CREATE TABLES

$q1 = "CREATE TABLE devices (
    name VARCHAR(50),
    id INT PRIMARY KEY AUTO_INCREMENT
)";

echo "<br>";

//DROP TABLES

$d = "DROP TABLE devices";

// $resultDrop = $conn->query($d);

echo "<br>";

//INSERTING DATAS

$table = "tools";
$name = "Victor";
$year = 2003;

$insert1 = "INSERT INTO $table (name, year) VALUES (
    '$name',
    '$year'
)";

// $conn->query($insert1);

//SELECTING DATAS with MYSQL

$s = "SELECT * FROM phpmysql";

$resultS = $conn->query($s);


//ONLY RESULT

$item = $resultS->fetch_assoc();

print_r($item);

echo "<br>";

//MORE RESULTS

$itens = $resultS->fetch_all();

print_r($itens);

//CONTINUE

$table1 = "phpmysql";
$name1 = "test";
$lastname = "test1";
$email = "testing@test.com";
$age = 10;
$job = "testttt";

$more = "INSERT INTO $table1 (name, lastname, email, age, job) VALUES (
    '$name1',
    '$lastname',
    '$email',
    '$age',
    '$job'
)";

$conn->query($more);

$conn->close();
?>