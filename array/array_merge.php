<?php

$array1 = [1 => "A", 2 => "B", 3 => "C"];
$array2 = [4 => "D", 5 => "E"];
$result1 = array_merge($array1, $array2);
print_r($result1);


$user1 = ["name" => "John", "age" => 22];
$user2 = ["name" => "Bob", "citi" => "New York"];
$result2 = array_merge($user1, $user2);
print_r($result2);