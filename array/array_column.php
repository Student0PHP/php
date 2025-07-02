<?php

$sample_data = array(
    array(
        'id' => 1,
        'first_name' => 'John',
        'last_name' => 'Doe'
    ),
    array(
        'id' => 2,
        'first_name' => 'Bob',
        'last_name' => 'Smith'
    ),
    array(
        'id' => 3,
        'first_name' => 'Jane',
        'last_name' => 'Doe'
    )

);

$first_name = array_column($sample_data, 'first_name');
print_r($first_name);