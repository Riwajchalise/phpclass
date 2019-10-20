<?php

$result = [];
$finally = false;

function sum()
{
    global $result, $finally;
    if ($finally) {
        if (count($result) > 0)
            echo array_sum($result);
        return true;
    } else {
        $n1 = floatval(trim(fgets(STDIN)));
        $n2 = floatval(trim(fgets(STDIN)));
        $result[] = $n1 + $n2;
    }
}

function multiply()
{
    global $result, $finally;
    if ($finally) {
        if (count($result) > 0)
            echo array_product($result);
        return true;
    } else {
        $n1 = floatval(trim(fgets(STDIN)));
        $n2 = floatval(trim(fgets(STDIN)));
        $result[] = $n1 * $n2;
    }
}

function divide()
{
    global $result, $finally;
    if ($finally) {
        $temp = $result;
        while (count($temp) > 1) {
            if ($temp[1] == 0) {
                echo "Caught exception: Division by zero.\n";
                return false;
            }
            $temp[] = $temp[0] / $temp[1];
            unset($temp[0]);
            unset($temp[1]);
            $temp = array_values($temp);
        }
        echo $temp[0];
        return true;
    } else {
        $n1 = floatval(trim(fgets(STDIN)));
        $n2 = floatval(trim(fgets(STDIN)));
        if ($n2 == 0) {
            echo "Caught exception: Division by zero.\n";
        } else {
            $result[] = $n1 / $n2;
        }
    }
}

function subtract()
{
    global $result, $finally;
    if ($finally) {
        $temp = $result;
        while (count($temp) > 1) {
            $temp[] = $temp[0] - $temp[1];
            unset($temp[0]);
            unset($temp[1]);
            $temp = array_values($temp);
        }
        echo $temp[0];
        return true;
    } else {
        $n1 = floatval(trim(fgets(STDIN)));
        $n2 = floatval(trim(fgets(STDIN)));
        $result[] = $n1 - $n2;
    }
}

function fact($n)
{
    $res = 1;
    while ($n > 1) {
        $res *= $n;
        $n--;
    }
    return $res;
}

function factorial()
{
    global $result, $finally;
    if ($finally) {
        $temp = [];
        foreach ($result as $value) {
            $temp[] = fact($value);
        }
        echo implode(", ", $temp);
        return true;
    } else {
        $n = floatval(trim(fgets(STDIN)));
        $result[] = fact($n);
    }
}

function root()
{
    global $result, $finally;
    if ($finally) {
        $temp = [];
        foreach ($result as $value) {
            if ($value < 0) {
                echo "Caught exception: Can't take the root of a negative number\n";
                return false;
            }
            $temp[] = sqrt($value);
        }
        echo implode(", ", $temp);
        return true;
    } else {
        $n = floatval(trim(fgets(STDIN)));
        if ($n < 0) {
            echo "Caught exception: Can't take the root of a negative number\n";
        } else {
            $result[] = sqrt($n);
        }
    }
}

function power()
{
    global $result, $finally;
    if ($finally) {
        while (count($result) > 1) {
            $result[] = pow($result[0], $result[1]);
            unset($result[0]);
            unset($result[1]);
            $result = array_values($result);
        }
        echo $result[0];
        return true;
    } else {
        $n1 = floatval(trim(fgets(STDIN)));
        $n2 = floatval(trim(fgets(STDIN)));
        $result[] = pow($n1, $n2);
    }
}

function absolute()
{
    global $result, $finally;
    if ($finally) {
        for ($i = 0; $i < count($result); $i++) {
            $result[$i] = abs($result[$i]);
        }
        echo implode(", ", $result);
        return true;
    } else {
        $n = floatval(trim(fgets(STDIN)));
        $result[] = abs($n);
    }
}

function pythagorean()
{
    global $result, $finally;
    if ($finally) {
        while (count($result) > 1) {
            $result[] = sqrt(pow($result[0], 2) + pow($result[1], 2));
            unset($result[0]);
            unset($result[1]);
            $result = array_values($result);
        }
        echo $result[0];
        return true;
    } else {
        $n1 = floatval(trim(fgets(STDIN)));
        $n2 = floatval(trim(fgets(STDIN)));
        $result[] = sqrt(pow($n1, 2) + pow($n2, 2));
    }
}

function triangleArea()
{
    global $result, $finally;
    if ($finally) {
        $temp = $result;
        while (count($temp) > 2) {
            $a = $temp[0];
            $b = $temp[1];
            $c = $temp[2];
            unset($temp[0]);
            unset($temp[1]);
            unset($temp[2]);
            $temp = array_values($temp);
            $s = ($a + $b + $c) / 2;
            $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
            if (is_nan($area)) {
                echo "Caught exception: Can't take the root of a negative number\n";
                return false;
            }
            $temp[] = $area;
        }
        echo implode(", ", $temp);
        return true;
    } else {
        $a = floatval(trim(fgets(STDIN)));
        $b = floatval(trim(fgets(STDIN)));
        $c = floatval(trim(fgets(STDIN)));
        $s = ($a + $b + $c) / 2;
        $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
        if ($area == NAN) {
            echo "Caught exception: Can't take the root of a negative number\n";
        } else {
            $result[] = $area;
        }
    }
}

function quadratic()
{
    global $result, $finally;
    if ($finally) {
        $temp = $result;
        while (count($temp) > 2) {
            $a = $temp[0];
            $b = $temp[1];
            $c = $temp[2];
            unset($temp[0]);
            unset($temp[1]);
            unset($temp[2]);
            $temp = array_values($temp);
            if ($a == 0) {
                echo "Caught exception: Division by zero. \n";
                return false;
            }
            $d = $b * $b - 4 * $a * $c;
            if ($d <= 0) {
                $temp[] = 0;
            } elseif ($d == 0) {
                $temp[] = (-$b / 2 * $a);
            } else {
                $temp[] = ((-$b + sqrt($d)) / (2 * $a)) + ((-$b - sqrt($d)) / (2 * $a));
            }
        }
        echo implode(", ", $temp);
        return true;
    } else {
        $a = floatval(trim(fgets(STDIN)));
        $b = floatval(trim(fgets(STDIN)));
        $c = floatval(trim(fgets(STDIN)));
        if ($a == 0) {
            echo "Caught exception: Division by zero. \n";
        } else {
            $d = $b * $b - 4 * $a * $c;
            if ($d <= 0) {
                $result[] = 0;
            } elseif ($d == 0) {
                $result[] = -$b / 2 * $a;
            } else {
                $result[] = ((-$b + sqrt($d)) / (2 * $a)) + ((-$b - sqrt($d)) / (2 * $a));
            }
        }
    }
}

while (true) {
    $command = trim(fgets(STDIN));
    if ($command == 'finally') {
        break;
    }
    if (function_exists($command))
        $command();
}


$finally = true;

while (true) {
    $command = trim(fgets(STDIN));
    if (function_exists($command))
        if ($command()) break;
}