<?php
//declare(strict_types = 1);
//define('STDIN',fopen("php://stdin","r"));
//$day = trim(fgets(STDIN));
$day = "Wednesdaysas";

function dayOfWeek(string $day)
{
    $number_to_return = "error";
    if ($day == "Monday") {
        $number_to_return = 1;
    } else if ($day == "Tuesday") {
        $number_to_return = 2;
    } else if ($day == "Wednesday") {
        $number_to_return = 3;
    } else if ($day == "Thursday") {
        $number_to_return = 4;
    } else if ($day == "Friday") {
        $number_to_return = 5;
    } else if ($day == "Saturday") {
        $number_to_return = 6;
    } else if ($day == "Sunday") {
        $number_to_return = 7;
    }
    return $number_to_return;
}

echo dayOfWeek($day);