<?php
$string = trim(fgets(STDIN));

function locate($string)
{
    $coordinates = preg_split('/[\s\,]+/', $string);
    var_dump(preg_split('/[\s\,]+/', $string));

    $coordinates = explode(',', trim(fgets(STDIN)));
    $output = [];
    //TUVALU
    $tuvaluX1 = 1;
    $tuvaluX2 = 3;
    $tuvaluY1 = 1;
    $tuvaluY2 = 3;

    //SAMOA
    $samoaX1 = 5;
    $samoaX2 = 7;
    $samoaY1 = 3;
    $samoaY2 = 6;

    //TONGA
    $tongaX1 = 0;
    $tongaX2 = 2;
    $tongaY1 = 6;
    $tongaY2 = 8;

    //COOK
    $cookX1 = 4;
    $cookX2 = 9;
    $cookY1 = 7;
    $cookY2 = 8;

    //TOKELAU
    $tokelauX1 = 8;
    $tokelauX2 = 9;
    $tokelauY1 = 0;
    $tokelauY2 = 1;

    for ($i = 0; $i < count($coordinates); $i += 2) {
        $x = intval($coordinates[$i]);
        $y = intval($coordinates[$i + 1]);

        //TUVALU
        if ($x >= $tuvaluX1 && $x <= $tuvaluX2 &&
            $y >= $tuvaluY1 && $y <= $tuvaluY2
        ) {
            $output[] = "Tuvalu";
        } //SAMOA
        else if ($x >= $samoaX1 && $x <= $samoaX2 &&
            $y >= $samoaY1 && $y <= $samoaY2
        ) {
            $output[] = "Samoa";
        } //TONGA
        else if ($x >= $tongaX1 && $x <= $tongaX2 &&
            $y >= $tongaY1 && $y <= $tongaY2
        ) {
            $output[] = "Tonga";
        } //COOK
        else if ($x >= $cookX1 && $x <= $cookX2 &&
            $y >= $cookY1 && $y <= $cookY2
        ) {
            $output[] = "Cook";
        } //TOKELAU
        else if ($x >= $tokelauX1 && $x <= $tokelauX2 &&
            $y >= $tokelauY1 && $y <= $tokelauY2
        ) {
            $output[] = "Tokelau";
        } //IN THE OCEAN
        else {
            $output[] = "On the bottom of the ocean";
        }
    }
    echo implode("\n", $output);
}

locate($string);