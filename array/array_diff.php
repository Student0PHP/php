<?php

$array1 = array("a" => "1", "3", "7", "15");
$array2 = array("b" => "1", "2", "3");
$array3 = array("c" => "5", "6", "8");
$array4 = array("d" => "7", "10", "14");
$result = array_diff($array1, $array2,$array3,$array4);

print_r($result);
