<?php
$string = "12321";
$string = trim(fgets(STDIN));

function symmetric($string)
{
    $lenght = strlen($string);
    $returnValue = "true";

    for ($i = 0; $i < $lenght / 2; $i++) {
        if ($string[$i] != $string[$lenght - $i - 1]) {
            $returnValue = "false";
        }
    }
    return $returnValue;
}
echo symmetric($string);