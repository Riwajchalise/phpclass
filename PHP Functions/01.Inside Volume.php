<?php
function volume_Check($input)
{
    $coordinates = explode(", ", $input);

    for ($i = 0; $i < count($coordinates); $i += 3) {
        $x = $coordinates[$i];
        $y = $coordinates[$i + 1];
        $z = $coordinates[$i + 2];

        $x1 = 10;
        $x2 = 50;
        $y1 = 20;
        $y2 = 80;
        $z1 = 15;
        $z2 = 50;

        if (($x1 <= $x && $x <= $x2) && ($y1 <= $y && $y <= $y2) && ($z1 <= $z && $z <= $z2)) {
            echo "inside" . "\n";
        } else {
            echo "outside" . "\n";
        }
    }
}


$number = fgets(STDIN);
volume_Check($number);
