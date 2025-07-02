<?php

$colors = ['red', 'green', 'blue'];
foreach ($colors as $color) {
    echo "Цвет: $color " . PHP_EOL;
}

foreach ($colors as $index => $color) {
    echo "Индекс: $index, Цвет: $color" . PHP_EOL;
}