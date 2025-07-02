<?php

$array1 = ["name" => "John", "age" => 22, "city" => "New York"];
$keys1 = array_keys($array1);
print_r($keys1);


$array2 = ["a" => 3, "b" => 11, "c" => 15, "d" => 23];
$keys2 = array_keys($array2, 11);
print_r($keys2);

