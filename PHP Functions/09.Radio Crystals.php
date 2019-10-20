<?php
$input = explode(", ", fgets(STDIN));
//$input = array(10, 100, 200, 300, 400, 500);
$desireThickness = $input[0];

for ($i = 1; $i < count($input); $i++) {
    $startingThikness = trim($input[$i]);

    echo "Processing chunk {$startingThikness} microns\n";
    $counter = 0;

    while ($startingThikness / 4 >= $desireThickness) {
        $startingThikness /= 4;   // изпълняваи докато дава 20 процента от дебелината
        $counter++;
    }
    if ($counter != 0) {   // изпълни само ако повече от 0 операции

        echo "Cut x{$counter}\n";
        echo "Transporting and washing\n";

        $counter = 0; // брои колко пъти се повтаря дадено действие
    }
    $startingThikness = floor($startingThikness);  // закръгля надолу до кръгло число

    while (($startingThikness * 0.8) >= $desireThickness) {
        $startingThikness *= 0.8;
        $counter++;
    }
    if ($counter != 0) {
        echo "Lap x{$counter}\n";
        echo "Transporting and washing\n";

        $counter = 0;
        $startingThikness = floor($startingThikness);
    }
    while ($startingThikness - 20 >= $desireThickness) {
        $startingThikness -= 20;
        $counter++;
    }
    if ($counter != 0) {
        echo "Grind x{$counter}\n";
        echo "Transporting and washing\n";

        $counter = 0;
        $startingThikness = floor($startingThikness);
    }
    while ($startingThikness - 1 >= $desireThickness) {
        $startingThikness -= 2;
        $counter++;
    }
    if ($counter != 0) {
        echo "Etch x{$counter}\n";
        echo "Transporting and washing\n";

        $counter = 0;
        $startingThikness = floor($startingThikness);
    }
    if ($startingThikness == $desireThickness - 1) {
        echo "X-ray x1\n";
        $startingThikness += 1;
    }
    echo "Finished crystal {$startingThikness} microns\n";
}