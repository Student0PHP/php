<?php

$base = array("a", "b", "c", "d");
$replacements = array(0 => "f", 4 => "h");
$replacements2 = array(0 => "g", 3 => "k");

$basket = array_replace($base, $replacements, $replacements2);
var_dump($basket);