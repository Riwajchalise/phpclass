<?php
$number = 20;
$number = trim(fgets(STDIN));

function divider($number)
{
    if (!is_numeric($number)) {
        return 'Caught exception: ' . 'Wrong type';
    } else if ($number == 0) {
        return 'Caught exception: ' . 'Division by zero.';
    } else {
        return 1 / $number;
    }
}

echo divider($number);
echo PHP_EOL;
echo 'Finally is always executed';