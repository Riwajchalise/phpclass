<?php
declare(strict_types = 1);
//list($aX, $aY, $bX, $bY, $cX, $cY) = array_map("floatval", explode(", ", trim(fgets(STDIN))));

list($aX, $aY, $bX, $bY, $cX, $cY) = array(1, 1, 1, 2, 2, 1);


$distanceAB = calculateDistance($aX, $aY, $bX, $bY);
$distanceAC = calculateDistance($aX, $aY, $cX, $cY);
$distanceBC = calculateDistance($bX, $bY, $cX, $cY);

echo buildShortestPath($distanceAB, $distanceAC, $distanceBC);

function buildShortestPath(float $distanceAB, float $distanceAC, float $distanceBC): string
{
    $output = "";
    if ($distanceAB <= $distanceAC && $distanceAB <= $distanceBC) {
        if ($distanceAC <= $distanceBC) {
            $output .= "1->2->3: " . ($distanceAB + $distanceAC);
            //echo $distanceAB + $distanceAC."<br>";;

        } else {
            $output .= "1->2->3: " . ($distanceAB + $distanceBC);
        }
    } else if ($distanceAC <= $distanceAB && $distanceAC <= $distanceBC) {
        if ($distanceAB <= $distanceBC) {
            $output .= "2->1->3: " . ($distanceAB + $distanceAC);
        } else {
            $output .= "1->3->2: " . ($distanceBC + $distanceAC);
        }
    } else {
        if ($distanceAB <= $distanceAC) {
            $output .= "1->2->3: " . ($distanceAB + $distanceBC);
            //echo $distanceAB + $distanceBC."<br>";

        } else {
            $output .= "1->3->2: " . ($distanceBC + $distanceAC);
        }
    }
    return $output;
}

function calculateDistance(float $aX, float $aY, float $bX = 0., float $bY = 0.): float
{
    $xDistance = $bX - $aX;
    $yDistance = $bY - $aY;
    return sqrt(($xDistance * $xDistance) + ($yDistance * $yDistance));
}