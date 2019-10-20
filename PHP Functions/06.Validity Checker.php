<?php
$array = explode(", ",fgets(STDIN));
//$array = array(3,0,0,4);
//$array = array(2, 1, 1, 1);
//$array = array(2.3, 1.4, 1.4, 1.4);

$x1 = floatval($array[0]);
$y1 = floatval($array[1]);
$x2 = floatval($array[2]);
$y2 = floatval($array[3]);

function check($x1, $y1, $x2, $y2)
{
    $cal = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));

    if ((int)$cal == $cal) {
        return $sum = "{{$x1}, {$y1}} to {{$x2}, {$y2}} is valid\n";
    } else {
        return $sum = "{{$x1}, {$y1}} to {{$x2}, {$y2}} is invalid\n";
    }

}
echo check($x1, $y1, 0, 0);
echo check($x2, $y2, 0, 0);
echo check($x1, $y1, $x2, $y2);

