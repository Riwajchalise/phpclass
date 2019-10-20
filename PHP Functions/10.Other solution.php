<?php
//$rowCount = 4;
$rowCount = intval(trim(fgets(STDIN)));
$dna = 'ATCGTTAGGG';
$letterCount = strlen($dna);

for ($row = 0, $letter = 0; $row < $rowCount; $row++, $letter += 2) {
    $index1 = $letter % $letterCount;
    $index2 = ($letter + 1) % $letterCount;
    $firstLetter = $dna[$index1];
    $secondLetter = $dna[$index2];

    switch ($row % 4) {
        case 0: echo "**{$firstLetter}{$secondLetter}**\n"; break;
        case 1: echo "*{$firstLetter}--{$secondLetter}*\n"; break;
        case 2: echo "{$firstLetter}----{$secondLetter}\n"; break;
        case 3: echo "*{$firstLetter}--{$secondLetter}*\n"; break;
    }
}
