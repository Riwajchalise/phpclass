<?php

$string = "Dry ice is a frozen form of which gas?, Carbon Dioxide, What is the brightest star in the night sky?, Sirius";
$string = trim(fgets(STDIN));


$array = explode(", ", $string);
$input = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";

echo htmlentities($input);
echo "<br>";
//echo str_repeat('&nbsp;', 2);
echo htmlentities("<quiz>");
for ($i = 0; $i < count($array); $i += 2) {
    echo "<br>";
    echo str_repeat('&nbsp;', 1);
    echo htmlentities("  <question> ");
    echo "<br>";
    echo str_repeat('&nbsp;', 5) . $array[$i] . "<br>";
    echo str_repeat('&nbsp;', 1);
    echo htmlentities("  </question> ");
    echo "<br>";
    echo str_repeat('&nbsp;', 1);
    echo htmlentities("  <answer> ");
    echo "<br>";
    echo str_repeat('&nbsp;', 5) . $array[$i + 1] . "<br>";
    echo str_repeat('&nbsp;', 1);
    echo htmlentities("  </answer> ");
}
echo "<br>";
echo htmlentities("</quiz>");
?>



