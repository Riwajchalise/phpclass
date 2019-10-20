<?php
$number = trim(fgets(STDIN));
//$number = 101;

if (array_sum(str_split($number)) / strlen($number) > 5) {  //сумата делена на броя числа
    echo $number;
} else {
    while (((array_sum(str_split($number))) / strlen($number)) < 5) {
        $number .="9";
    }
    echo $number;
}