<?php
function func1()
{
    echo "Hello <br>";
}
func1();

function func2($name)
{
    echo "Hello $name <br>";
}
func2("maria");

function add($a, $b)
{
    return $a + $b;
}
$result = add(10, 5);
echo $result;