<?php

$input = trim(fgets(STDIN));
$commands = [];

while ($input !== "finally") {
    $commands[] = $input;
    $input = trim(fgets(STDIN));
}

$finalCommand = trim(fgets(STDIN));

$output = [];
for ($i = 0; $i < count($commands); $i++) {
    $command = $commands[$i];
    $argCount = getArgumentCount($command);
    if ($argCount == 1) {
        $num1 = $commands[++$i];
        $result = calculate($command, $num1);
        $output[] = $result;

    } else if ($argCount == 2) {
        $num1 = $commands[++$i];
        $num2 = $commands[++$i];
        $result = calculate($command, $num1, $num2);
        $output[] = $result;

    } else if ($argCount == 3) {
        $num1 = $commands[++$i];
        $num2 = $commands[++$i];
        $num3 = $commands[++$i];
        $result = calculate($command, $num1, $num2, $num3);
        $output[] = $result;

    }
}

$output = array_values(array_filter($output));
$outputCount = count($output);
$requiredCount = getArgumentCount($finalCommand);
$finalOutput = [];

if ($outputCount >= $requiredCount) {
    $finalOutput = $output;
    for($i = 0; $i < count($finalOutput); $i++){
        if ($requiredCount == 1) {
            $num1 = $finalOutput[$i];
            $result = calculate($finalCommand, $num1);
            $finalOutput[$i] = $result;
            $outputCount--;
        } else if ($requiredCount == 2){
            $num1 = $finalOutput[$i];
            $num2 = $finalOutput[$i + 1];
            $result = calculate($finalCommand, $num1, $num2);
            $finalOutput[$i + 1] = $result;
            $outputCount--;
        } else if ($requiredCount == 3){
            $num1 = $finalOutput[$i];
            $num2 = $finalOutput[$i + 1];
            $num3 = $finalOutput[$i + 2];
            $result = calculate($finalCommand, $num1, $num2,$num3);
            $finalOutput[$i + 2] = $result;
            $outputCount--;
        }
        if($outputCount < $requiredCount){
            break;
        }
    }
}

if ($finalOutput != []) {
    if($requiredCount == 1){
        array_slice($finalOutput, count($output));
        echo implode(", ", $finalOutput);
    } else {
        $final = array_pop($finalOutput);
        echo $final;
    }
} else {
    echo implode(", ", $output);
}


function getArgumentCount(string $command)
{
    $argCount = 0;
    switch ($command) {
        case "factorial":
        case "root":
        case "absolute":
            $argCount = 1;
            break;
        case "sum":
        case "multiply":
        case "divide":
        case "subtract":
        case "power":
        case "pythagorean":
            $argCount = 2;
            break;
        case "triangleArea":
        case "quadratic":
            $argCount = 3;
            break;
    }
    return $argCount;
}


function calculate(string $operation, int $num1, int $num2 = 0, int $num3 = 0) {
    $result = '';

    switch ($operation) {
        case "sum":
            $result = $num1 + $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            try {
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    throw new Exception("Division by zero.");
                }
            } catch (Exception $e1) {
                echo "Caught exception: " . $e1->getMessage() . "\n";
            }
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "factorial":
            $result = 1;
            for ($i = $num1; $i >= 1; $i--) {
                $result *= $i;
            }
            break;
        case "root":
            try {
                if ($num1 >= 0) {
                    $result = sqrt($num1);
                } else {
                    throw new Exception("Can't take the root of a negative number");
                }
            } catch (Exception $e2) {
                echo "Caught exception: " . $e2->getMessage() . "\n";
            }
            break;
        case "absolute":
            $result = abs($num1);
            break;
        case "power":
            $result = pow($num1, $num2);
            break;
        case "pythagorean":
            $result = sqrt(pow($num1, 2) + pow($num2, 2));
            break;
        case "triangleArea":
            $s = ($num1 + $num2 + $num3) / 2;
            $a = $s * ($s - $num1) * ($s - $num2) * ($s - $num3);
            try {
                if (is_nan(sqrt($a))) {
                    throw new Exception("Can't take the root of a negative number");
                }
                $result = round(sqrt($a));
            } catch (Exception $e3) {
                echo "Caught exception: " . $e3->getMessage() . "\n";
            }
            break;
        case "quadratic":
            $a = $num1;
            $b = $num2;
            $c = $num3;
            $d = $b * $b - 4 * $a * $c;
            try {
                if ($a == 0) {
                    throw new Exception("Division by zero.");
                }

                if ($d == 0) {
                    $result = (-$b / 2 * $a);
                } else {
                    $x1 = (-$b + sqrt($d)) / (2 * $a);
                    $x2 = (-$b - sqrt($d)) / (2 * $a);
                    $result = round($x1 + $x2);
                }
            } catch (Exception $e4) {
                echo "Caught exception: " . $e4->getMessage() . "\n";
            }
            break;
    }

    return $result;
}