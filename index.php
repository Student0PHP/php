<?php

$name = "John";
$age = 18;
$bool = true;
$float = 2.11;

$num1 = 0;
$num2 = 1;

function func1($some)
{
    $some = $some + 1;
    return $some;
}

$arr = [1, 2, 3,10,122,'hello'];

$foo = 'hello world!';
$foo = ucfirst($foo);

$str = 'Hello World!';
$str = strtoupper($str);


//echo pow(11, 2); // 121
//echo var_dump (pow(11, 2)); // int
//echo $name . ' ' . $age;
//echo $num2 + $num2 * $num1; // 1
//echo var_dump ($arr = [1, 2, 3,10,122,'hello']); // array
//echo func1(some: 1); // 2
//echo $foo; // Hello world!
//echo $str; // HELLO WORLD!