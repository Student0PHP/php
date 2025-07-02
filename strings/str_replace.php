<?php

$text = "Я люблю яблоки";
$newText = str_replace("яблоки", "апельсины", $text);

$text2 = "1-2-3";
$newText2 = str_replace([1, 2, 3], ["один", "два", "три"], $text2);

echo $newText . PHP_EOL . $newText2;
