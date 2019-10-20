<?php
$number = 9;
$array = ['dice', 'spice', 'chop', 'bake', 'fillet'];

//$number = trim(fgets(STDIN));
//$array = explode(", ", trim(fgets(STDIN)));

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == "chop") {
        echo $number = $number / 2;
        echo "\n";
    } else if ($array[$i] == "dice") {
        echo $number = sqrt($number);
        echo "\n";
    } else if ($array[$i] == "spice") {
        echo $number+=1;
        echo "\n";
    } else if ($array[$i] == "bake") {
        echo $number *= 3;
        echo "\n";
    } else if ($array[$i] == "fillet") {
        echo $number *= 0.8;
        echo "\n";
    }
}