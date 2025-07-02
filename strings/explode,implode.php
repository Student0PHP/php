<?php

$csv = "PHP,JavaScript,Python";
$languages = explode(",", $csv);
print_r($languages);

echo implode("|", $languages);
