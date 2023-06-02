<?php

$list = ["Victor", "Rafaella", "Roberto", "Janaína"];
$result = implode(", ", $list);
echo $result;

function math(int $a, int $b, int $c)
{
    return
        $a + $b + $c;
}

echo "<br/>";

echo math(10, 20, 30);

echo "<br/>";

function fullName(string $name, string $lastName)
{
    return
        "My name's $name $lastName.";
}

echo fullName("Victor", "de Paula da Matta");

echo "<br/>";

function Person(string $name, int $age)
{
    return
        "Hello, I'm ${name} and I'm ${age}y.";
}

echo Person("Victor", 19);

echo "<br/>";

function Verify(int $num1)
{
    if ($num1 % 2 === 0) {
        return "This $num1 number is pair.";
    } else {
        return "This $num1 number is odd.";
    }
}

echo Verify(10);

echo "<br/>";

function RQD(int $num2)
{
    return $num2 * $num2;
}

echo RQD(10);

echo "<br/>";

$a = 10;

function test()
{
    static $a = 20;

    echo $a;
}

echo $a;
echo "<br/>";
echo test();
echo "<br/>";

$listt = [];
for ($v = 0; $v <= 49; $v++) {
    array_push($listt, $v);
}
print_r($listt);

echo "<br/>";

function bigger7($list)
{
    $returnArray = [];
    for ($v = 0; $v < count($list); $v++) {
        if ($list[$v] > 7) {
            array_push($returnArray, $list[$v]);
        }
    }
    return $returnArray;
}

print_r(bigger7($listt));

echo "<br/>";

function defineColorCar(string $color1 = "red")
{
    echo "My first car is $color1.";
}

echo defineColorCar();
echo "<br/>";
echo defineColorCar("blue");

echo "<br/>";


function SM()
{
    $str = "It's your Super Market list: ";
    $arr = ["coffe", "stramberry", "apple", "banana", "tomato", "carrot"];
    foreach ($arr as $item) {
        $result = $str .= $item;
    }
    echo $result;
}

SM();

?>