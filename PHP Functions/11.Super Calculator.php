<?php

$input = trim(fgets(STDIN));

$commands = array();

$sum = 0;


function sum($first, $second, &$commands)
{
    $sum = floatval($first) + floatval($second);
    array_push($commands, $sum);

    return $sum;
}

function multiply($first, $second, &$commands)
{
    $sum = $first * $second;
    array_push($commands, $sum);
    return $sum;
}


function divide($first, $second, &$commands)
{

    $sum = floatval($first) / floatval($second);
    if ($second = 0) {
        echo "Division by zero exception";
    }

    array_push($commands, $sum);

    return $sum;
}


function subtract($first, $second, &$commands)
{

    $sum = floatval($first) - floatval($second);

    array_push($commands, $sum);

    return $sum;
}

function factorial($first, &$commands)
{

    function factorials($first)
    {
        if ($first < 2) {
            return 1;
        } else {
            return ($first * factorials($first - 1));
        }
    }

    $sum = factorials($first);

    array_push($commands, $sum);

    return $sum;
}

function root($first, &$commands)
{
    if ($first < 0) {
        echo "Can't take the root of negative number";
    }
    $sum = sqrt($first);

    array_push($commands, $sum);

    return $sum;
}

function power($first, $second, &$commands)
{

    $sum = pow(floatval($first), floatval($second));
    array_push($commands, $sum);


    return pow(floatval($first), floatval($second));
}

function absolute($first, &$commands)
{

    $sum = abs($first);
    array_push($commands, $sum);
    return $sum;
}

function pythagorean($first, $second, &$commands)
{

    $sum = sqrt(($first * $first) + ($second * $second));

    array_push($commands, $sum);
    return $sum;
}

function triangleArea($a, $b, $c, &$commands)
{

    $s = ($a + $b + $c) / 2;

    $sum = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));

    if (is_nan($sum)) {
        throw new Exception("Can't take the root of a negative number");
    }
    array_push($commands, $sum);

    return $sum;
}

function quadratic($a, $b, $c)
{

    if ($a == 0) {
        throw new Exception("Division by zero.");
    }
    $discriminant = ($b * $b) - (4 * $a * $c);
    if ($discriminant < 0) {
        return 0;
    }
    $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
    if ($discriminant == 0) {
        return $x1;

    }
    return $x1 + $x2;
}


while (true) {
    if ($input == "finally") {
               break;

    } else if ($input == "sum") {
        $first = trim(fgets(STDIN));
        $second = trim(fgets(STDIN));

        sum($first, $second, $commands);

    } else if ($input == "multiply") {
        $first = floatval(trim(fgets(STDIN)));
        $second = floatval(trim(fgets(STDIN)));

        multiply($first, $second, $commands);

    } else if ($input == "divide") {
        $first = trim(fgets(STDIN));
        $second = trim(fgets(STDIN));

        divide($first, $second, $commands);
    } else if ($input == "subtract") {
        $first = trim(fgets(STDIN));
        $second = trim(fgets(STDIN));

        subtract($first, $second, $commands);
    } else if ($input == "factorial") {
        $first = trim(fgets(STDIN));

        factorial($first, $commands);
    } else if ($input == "root") {
        $first = trim(fgets(STDIN));

        root($first, $commands);
    } else if ($input == "power") {
        $first = trim(fgets(STDIN));
        $second = trim(fgets(STDIN));

        power($first, $second, $commands);
    } else if ($input == "absolute") {
        $first = trim(fgets(STDIN));

        absolute($first, $commands);
    } else if ($input == "pythagorean") {
        $first = floatval(trim(fgets(STDIN)));
        $second = floatval(trim(fgets(STDIN)));

        pythagorean($first, $second, $commands);
    } else if ($input == "triangleArea") {
        $first = floatval(trim(fgets(STDIN)));
        $second = floatval(trim(fgets(STDIN)));
        $third = floatval(trim(fgets(STDIN)));

        triangleArea($first, $second, $third, $commands);
    } else if ($input == "quadratic") {
        $a = floatval(trim(fgets(STDIN)));
        $b = floatval(trim(fgets(STDIN)));
        $c = floatval(trim(fgets(STDIN)));

        $sum = quadratic($a, $b, $c);

        array_push($commands, $sum);
    }
    $input = trim(fgets(STDIN));
}
//////////////////////////////////

$lastCommand = trim(fgets(STDIN));

if ($lastCommand == "sum") {
    $sum = sum($commands[0], $commands[1], $commands);
} else if ($lastCommand == "multiply") {
    $sum = multiply($commands[0], $commands[1], $commands);
} else if ($lastCommand == "divide") {
    $sum = divide($commands[0], $commands[1], $commands);
} else if ($lastCommand == "subtract") {
    $sum = subtract($commands[0], $commands[1], $commands);
} else if ($lastCommand == "factorial") {
    factorial($commands[0], $commands);
} else if ($lastCommand == "root") {
    $sum = root($commands[0], $commands);
} else if ($lastCommand == "power") {
    $sum = power($commands[0], $commands[1], $commands);
} else if ($lastCommand == "absolute") {
    $sum = absolute($commands[0], $commands);
} else if ($lastCommand == "pythagorean") {
    $sum = pythagorean($commands[0], $commands[1], $commands);
} else if ($lastCommand == "triangleArea") {
    $sum = triangleArea($commands[0], $commands[1], $third, $commands[2]);
} else if ($lastCommand == "quadratic") {
    $sum = quadratic($commands[0], $commands[1], $commands[2]);

    array_push($commands, $sum);
}

echo $sum;