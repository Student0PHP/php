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

$arr = [
    'first' => 1,
    'sec' => 2,
    111,
    'str',
    false,
    null,
];

$arr ['last'] = 50;
$arr [] = 70;
array_push($arr, 100);

//$max = max($arr);
//var_dump($arr[0]);

$num = 160;
$res = '';

//&&
//||
//!

$gender = 'men';
$age = 25;

//true
//false
if($gender == 'men' && $age > 18) {
    $res = 'Success';
}
//var_dump($gender == 'men' && $age > 28);
// > < ==
if ($num == 160) {
//    $res = 'Success';
} else  {
    $es = 'Sad';
}
//echo $res;

$foo = 'hello world!';
$foo = ucfirst($foo);

$str = 'Hello World!';
$str = strtoupper($str);

$arr2 = [
    'some' => 10,
    'second' => 20,
    30,
    40,
    50
];

//foreach ($arr2 as $value) {
//    if($value > 30) {
//        echo $value . PHP_EOL;
//    }
//}
foreach ($arr2 as $key => $value) {
    echo $key . PHP_EOL;
    echo $value . PHP_EOL;
    echo '---------' . PHP_EOL;
}

//echo pow(11, 2); // 121
//echo var_dump (pow(11, 2)); // int
//echo $name . ' ' . $age;
//echo $num2 + $num2 * $num1; // 1
//echo var_dump ($arr = [1, 2, 3,10,122,'hello']); // array
//echo func1(some: 1); // 2
//echo $foo; // Hello world!
//echo $str; // HELLO WORLD!
