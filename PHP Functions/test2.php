<?php
declare(strict_types = 1);

//list($aX, $aY, $bX, $bY, $cX, $cY) = array_map("floatval", explode(", ", trim(fgets(STDIN))));
list($aX, $aY, $bX, $bY, $cX, $cY) = array(1, 1, 1, 2, 2, 1);
echo buildShortestPath(
    calculateDistance($aX, $aY, $bX, $bY),
    calculateDistance($aX, $aY, $cX, $cY),
    calculateDistance($bX, $bY, $cX, $cY));

function buildShortestPath(float $distanceA, float $distanceB, float $distanceC)
{
    $paths = [
        (object)["name" => "ab", "len" => $distanceA],
        (object)["name" => "ac", "len" => $distanceB],
        (object)["name" => "bc", "len" => $distanceC],
    ];

    usort($paths, function ($a, $b) {
        $res = $a->len <=> $b->len;
        return $res === 0 ? $a->name <=> $b->name : $res;
    });

    if ($paths[2]->name == "bc") {
        $output = "2->1->3: ";
    } else if ($paths[2]->name == "ac") {
        $output = "1->2->3: ";
    } else {
        $output = "1->3->2: ";
    }

    $output .= ($paths[0]->len + $paths[1]->len);
    return $output;
}

function calculateDistance(float $aX, float $aY, float $bX = 0., float $bY = 0.): float
{
    return sqrt((($bX - $aX) * ($bX - $aX)) + (($bY - $aY) * ($bY - $aY)));
}