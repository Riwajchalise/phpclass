<?php
$rows = intval(fgets(STDIN));
//$rows  = 4;

$sequence = 'ATCGTTAGGG';
$currentIndex = 0;

for ($i = 0; $i < $rows; $i++) {
    $currentRow = $i % 4;   // текущия ред да се върти само от 0 до 4 защото толково се повтаря спиралата

    if ($currentRow === 0) { // модулното делене е да не излизаме от  дължината
        echo "**" . $sequence[$currentIndex++ % strlen($sequence)] . $sequence[$currentIndex++ % strlen($sequence)] . '**';
        echo "\n";

    } else if ($currentRow === 1 || $currentRow === 3) {
        echo "*" . $sequence[$currentIndex++ % strlen($sequence)] . '--' . $sequence[$currentIndex++ % strlen($sequence)] . '*';
        echo "\n";

    } else {
        echo $sequence[$currentIndex++ % strlen($sequence)] . '----' . $sequence[$currentIndex++ % strlen($sequence)];
        echo "\n";
    }
}