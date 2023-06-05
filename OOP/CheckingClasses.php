<!-- Em PHP temos alguns métodos que nos ajudam a entender as classes;
class_exists() => verifica se uma classe existe;
get_class_methods() => verifica os métodos de uma classe;
get_class_vars() => mapeamento das propriedades de uma classe; -->

<?php

class Human
{
    public $age;
    public $name;
    public $job;

    public function walk()
    {

    }

    public function speak()
    {

    }
}

if (class_exists("Human")) {
    echo "Class exists.";
}
echo "<br>";

print_r(get_class_vars("Human"));

echo "<br>";

print_r(get_class_methods("Human"));

?>