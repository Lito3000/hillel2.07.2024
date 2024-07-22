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
$intArray = count($myArray);
print_r($myArray);



function countSumNumber(array $a): int
{
    $sum = 0;
    foreach ($a as $number) {
        $sum = $sum + $number;
    }
    return $sum;
}
$result2 = countSumNumber($myArray);
echo $result2.PHP_EOL;
//------------------------------------------------------------------------------------------------------------------------------------
function countNumber_5(array $a, int $b): int
{
    $count = 0;
    for ($i = 0; $i < $b; $i++) {
        if ($a[$i] === 5) {
            $count = $count + 1;
        }
    }
    return $count;
}
$result2 = countNumber_5($myArray, $intArray);
echo $result2.PHP_EOL;
//----------------------------------------------------------------------------------------------------------------------------------
function calculateProductElement(array $a, int $b): int
{
    $calculate = 1;
    for ($i = 0; $i < $b; $i++) {
        $calculate = $calculate * $a[$i];
    }
    return $calculate;
}
$result1 = calculateProductElement($myArray, $intArray);
echo $result1.PHP_EOL;
//-----------------------------------------------------------------------------------------------------------------------------------
function divisibleBy_3(array $a, int $b): void
{
    for ($i = 0; $i < $b; $i++) {
        if ($a[$i] % 3 !== 0) {
            continue;
        } else {
            echo $a[$i] . PHP_EOL;
        }
    }
}
divisibleBy_3($myArray, $intArray);



