<?php

function randArray(int $length = 10, int $min = 1, int $max = 10): array
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

$myArray = randArray();
$mySort = $myArray;
print_r($myArray);

//---------------------------------------------------------------------------------------------------------------------------------

function sortMax(array $a): int
{
    return max($a);
}

$resultMax = sortMax($myArray);
echo $resultMax . PHP_EOL;
//---------------------------------------------------------------------------------------------------------------------------------
function sortMin(array $a): int
{
    return min($a);
}

$resultMin = sortMin($myArray);
echo $resultMin . PHP_EOL;

//----------------------------------------------------------------------------------------------------------------------------------
function numberSort(&$sort): void
{
    usort($sort, fn($a, $b) => $a <=> $b);
}

numberSort($mySort);
print_r($mySort);



