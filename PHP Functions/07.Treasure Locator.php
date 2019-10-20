<?php
$array = explode(', ', trim(fgets(STDIN)));
//$array = array(4, 2, 1, 5, 6, 5, 1, 3);

for ($i = 0; $i < count($array); $i += 2) {
    $x = $array[$i];
    $y = $array[$i + 1];

     echo inside($x, $y);
     echo "\n";
}

function inside($x, $y)
{
    $value = "On the bottom of the ocean";
    if ($x >= 1 && $x <= 3 && $y >= 1 && $y <= 3) {
        $value = "Tuvalu";
    } else if ($x >= 0 && $x <= 2 && $y >= 6 && $y <= 8) {
        $value = "Tonga";
    }
    else if ($x >= 5 && $x <= 7 && $y >= 3 && $y <= 6) {
        $value = "Samoa";
    }
    else if ($x >= 4 && $x <= 9 && $y >= 7 && $y <= 8) {
        $value = "Cook";
    }
    else if ($x >= 8 && $x <= 9 && $y >= 0 && $y <= 1) {
        $value = "Tokelau";
    }

    return $value;
}