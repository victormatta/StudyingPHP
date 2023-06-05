<!-- Em PHP temos alguns métodos que nos ajudam a entender melhor os objetos;
is_object() => verifica se uma variável é um objeto;
get_class() => verifica a classe de um objeto;
method_exists() => verifica se um método existe em um objeto; -->

<?php

class Person
{
    public function speak()
    {

    }
}

$victor = new Person;
$teto = "Trapper";

if (is_object($victor)) {
    echo "This a object.";
}

echo "<br>";

if (is_object($teto)) {
    echo "This a object.";
} else {
    echo "This a trapper.";
}

echo "<br>";

echo get_class($victor);

echo "<br>";

if (method_exists($victor, "speak")) {
    echo "Exists.";
}

?>