<?php

$speed = intval(trim(fgets(STDIN)));
$area = trim(fgets(STDIN));
$overSpeed = "";
//$speed = intval(20);
//$area = "residential";

function speeds(int $speed, string $area, &$overSpeed)
{
    if ($area == "motorway") {
        return difference_Speed($speed, 130, $overSpeed);
    } else if ($area == "interstate") {
        return difference_Speed($speed, 90, $overSpeed);
    } else if ($area == "city") {
        return difference_Speed($speed, 50, $overSpeed);
    } else if ($area == "residential") {
        return difference_Speed($speed, 20, $overSpeed);
    } else {
        return "Not Valid Input";
    }
}

function difference_Speed(int $speed, int $speedLimit, &$overSpeed)
{
    $overSpeed = $speed - $speedLimit;

    if ($overSpeed >= 0 && $overSpeed < 20) {
        $overSpeed = "speeding";
    } else if ($overSpeed >= 20 && $overSpeed < 40) {
        $overSpeed = "excessive speeding";
    } else if ($overSpeed >= 40) {
        $overSpeed = "reckless driving";
    } else if ($overSpeed < 0) {
        $overSpeed = "";
    }
    return $overSpeed;
}

$speedssssss = speeds($speed, $area, $overSpeed);

print($overSpeed);

