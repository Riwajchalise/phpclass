<?php
declare(strict_types = 1);

//$data = generateArrayFromInput(trim(fgets(STDIN)));
$data = generateArrayFromInput(trim("Dry ice is a frozen form of which gas?, Carbon Dioxide, What is the brightest star in the night sky?, Sirius"));
echo generateXmlFromArray($data);

function generateArrayFromInput(string $input): array
{
    $result = [];
    $input = explode(", ", $input);
    for ($i = 0; $i < count($input); $i += 2) {
        $question = $input[$i];
        $answer = $input[$i + 1];
        $result[$question] = $answer;
    }

    return $result;
}

function generateXmlFromArray(array $array): string
{
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= "<quiz>\n";
    foreach ($array as $q => $a) {
        $xml .= "  <question>\n    {$q}\n  </question>\n";
        $xml .= "  <answer>\n    {$a}\n  </answer>\n";
    }

    $xml .= "</quiz>";

    return $xml;
}