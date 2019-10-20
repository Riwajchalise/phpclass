<?php
//declare(strict_types = 1);
//$array = explode(', ', fgets(STDIN));
//$array = array(0, 0, 2, 0, 4, 0);
//$array = array(5, 1, 1, 1, 5, 4);
//$array = array(-1, -2, 3.5, 0, 0, 2);
//$array = array(10, 0.10, 20, 10, 28.888, 10);
//$array = array(1, 1, 1, 2, 2, 1);

//list($x1, $y1, $x2, $y2, $x3, $y3) = array_map("floatval", explode(", ", trim(fgets(STDIN))));
list($x1, $y1, $x2, $y2, $x3, $y3) = array(9, 10, 5, 10, 8, 0);
//list($x1, $y1, $x2, $y2, $x3, $y3) = array(0, 0, 4, 0, 2, 3.4641016151377);

function calculateDistance(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3)
{

    $AB = sqrt(($x1 - $x2) * ($x1 - $x2) + ($y1 - $y2) * ($y1 - $y2));
    $BC = sqrt(($x2 - $x3) * ($x2 - $x3) + ($y2 - $y3) * ($y2 - $y3));
    $CA = sqrt(($x1 - $x3) * ($x1 - $x3) + ($y1 - $y3) * ($y1 - $y3));

    $ABC = $AB + $BC;
    $BCA = $AB + $CA;
    $ACB = $CA + $BC;

    $x1 = min($ABC, $BCA, $ACB);
    $x2 = max($ABC, $BCA, $ACB);

//    $start = 0;
//    if ($x1 == $ABC) {
//        $start = "B";
//    } else if ($x1 == $BCA) {
//        $start = "A";
//    } else if ($x1 == $ACB) {
//        $start = "C";
//    }
//
//    $end = 0;
//    if ($x2 == $ABC) {
//        $start = "C";
//    } else if ($x1 == $BCA) {
//        $start = "A";
//    } else if ($x1 == $ACB) {
//        $start = "C";
//    }
//
//
//    var_dump($AB, $BC, $CA);
//    echo "<br>";
//    var_dump($AB + $BC, $BC + $CA);
//    echo "<br>";
//    var_dump($AB + $CA, $BC + $CA);
//    echo "<br>";
//    var_dump($BC + $CA, $AB + $CA);
//    echo "<br>";

//    function Distance($x1, $y1, $x2 = 0, $y2 = 0)
//    {
//        return sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
//    }
//
//    list($x1, $y1, $x2, $y2, $x3, $y3) = explode(", ", trim(fgets(STDIN)));
//
//    $d3 = Distance($x1, $y1, $x2, $y2);
//    $d1 = Distance($x2, $y2, $x3, $y3);
//    $d2 = Distance($x1, $y1, $x3, $y3);
//
//    $trip1 = $d1 + $d3;
//    $trip2 = $d1 + $d2;
//    $trip3 = $d2 + $d3;
//
//    if ($trip3 = max($trip3, $trip2, $trip1)) {
//        echo "2->1->3: " . $trip3;
//    } elseif ($trip2 < $trip1) {
//        echo "1->3->2: " . $trip2;
//    } else {
//        echo "1->2->3: " . $trip1;
//    }


    $print = "";
    if ($ABC < $ACB) {
        $print = '1->2->3: ' . $ABC;
    } else if ($BCA < $ACB) {
        $print = '2->1->3: ' . $BCA;
    } else if ($ACB < $BCA) {

        $print = '1->3->2: ' . $ACB;
    }
    return $print;
}

echo calculateDistance($x1, $y1, $x2, $y2, $x3, $y3);


